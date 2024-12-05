<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasipembayaran extends Model
{
    protected $table= 'konfirmasi_pembayaran';

    protected $fillable = [
        'id_user',
        'id_ms_rekening',
        'id_ref_bank',
        'file_bukti',
        'tgl_bayar',
        'nama_pemilik_rekening',
        'id_ref_bank',
        'no_rekening_pemilik',
        'status',
        'tindaklanjut_tgl',
        'tindaklanjut_user',
        'nominal_transfer',
    ];
}


