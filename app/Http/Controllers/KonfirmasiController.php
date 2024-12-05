<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Kapal;
use App\Models\Konfirmasipembayaran;
use App\Models\Rekening;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function create() {

        $bank = Bank::get();
        $rekening = Rekening::get();
    return view('konfirmasipembayaran.create', compact('bank', 'rekening'));
        
    }

    public function store(Request $request){

        // dd($request->all());
        $request->validate([
            'id_ref_bank' => 'required|exists:banks,id',
            'nominal_transfer' => 'required|numeric',
            'id_ms_rekening' => 'required|exists:rekenings,id',
            'file_bukti' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $rekening = Rekening::where('id', $request->id_ms_rekening)->first();

        // dd($rekening);
        $file_bukti = time() . '.' . $request->file_bukti->extension();
        $request->file_bukti->move(public_path("file_bukti"), $file_bukti);

        $pembayaran = new Konfirmasipembayaran();
        $pembayaran->id_user = auth()->user()->id;
        $pembayaran->id_ref_bank = $request->id_ref_bank;
        $pembayaran->id_ms_rekening = $request->id_ms_rekening;
        $pembayaran->nominal_transfer = $request->nominal_transfer;
        $pembayaran->file_bukti = $file_bukti;
        $pembayaran->tgl_bayar = now();
        $pembayaran->nama_pemilik_rekening = $rekening->nama_akun;
        $pembayaran->no_rekening_pemilik = $rekening->no_rekening;
        $pembayaran->status = 'P';
        $pembayaran->save();

        return back()->withSuccess('Data berhasil ditambahkan');
    }
    
    public function Status(Request $request, $id)
{
    $validated = $request->validate([
        'status' => 'required|in:sesuai,tidak_sesuai',
    ]);

    $konfirmasiBayar = Konfirmasipembayaran::findOrFail($id);

    $status = $validated['status'] === 'sesuai' ? 'Y' : 'N';

    $konfirmasiBayar->status = $status;
    $konfirmasiBayar->tindaklanjut_tgl = now();
    $konfirmasiBayar->tindaklanjut_user = 'Admin';
    $konfirmasiBayar->save();
    if($status == 'Y'){
        $kapal = Kapal::where('id_user',$konfirmasiBayar->id_user)->whereNull('konfirmasi_bayar_id');

        $kapal->update([
            'konfirmasi_bayar_id' => $konfirmasiBayar->id
        ]);
    }

    return redirect()->back()->with('success', 'Status berhasil diperbarui.');
}
}
