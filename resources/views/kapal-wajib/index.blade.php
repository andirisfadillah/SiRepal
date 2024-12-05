@extends('layouts.master')

@section('content')
    @include('layouts.alert')    
        <table style="width: 100%" class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama Kapal</th>
                    <th class="text-center">Nilai Retribusi</th>
                    <th class="text-center">Tanggal Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kapal as $index => $data)
                    <tr>
                        <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                        <td scope="col" class="text-center">
                            {{ $data->nama_kapal }}</td>
                        <td scope="col" class="text-center">
                            {{ $data->jenisKapal->biaya_retribusi }}</td>
                        <td scope="col" class="text-center">
                            {{ $data->konfirmasiBayar->tgl_bayar }}</td>
                     
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
