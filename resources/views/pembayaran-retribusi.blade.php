@extends('layouts.master')

@section('content')
    @include('layouts.alert')

    <table class="table table-bordered" id="datatables">
        <thead class="table-light">
            <tr>
                <th class="text-center" style="width: 50px;">No.</th>
                <th class="text-center" style="width: 200px;">Nama Lengkap</th>
                <th class="text-center" style="width: 200px;">Rekening</th>
                <th class="text-center" style="width: 200px;">Bukti</th>
                <th class="text-center" style="width: 200px;">Tanggal Bayar</th>
                <th class="text-center" style="width: 200px;">Tanggal Tindak Lanjut</th>
                <th class="text-center" style="width: 200px;">Tindak Lanjut User</th>
                <th class="text-center" style="width: 180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Konfirmasipembayaran as $data)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $data->nama_pemilik_rekening }}</td>
                    <td class="text-center">{{ $data->no_rekening_pemilik }}</td>
                    <td class="text-center">
                        @if ($data->file_bukti)
                            <img src="{{ asset('/file_bukti/' . $data->file_bukti) }}" alt="Bukti Pembayaran"
                                class="rounded img-fluid" style="max-width: 80px;">
                        @else
                            <span class="text-muted">No Image Available</span>
                        @endif
                    </td>
                    <td class="text-center">{{ $data->created_at->format('d-m-Y') }}</td>
                    <td class="text-center">{{ $data->tindaklanjut_tgl ?? 'Belum Ditindak' }}</td>
                    <td class="text-center">{{ $data->tindaklanjut_user ?? 'Belum Ada' }}</td>
                    <td class="text-center">
                        @if ($data->status === 'Y')
                            <span class="badge bg-success">Sesuai</span>
                        @elseif ($data->status === 'N')
                            <span class="badge bg-danger">Tidak Sesuai</span>
                        @else
                            <form action="{{ route('Konfirmasi-pembayaran.status', $data->id) }}" method="POST"
                                class="d-flex justify-content-start">
                                @csrf
                                <button type="submit" name="status" value="sesuai"
                                    class="btn btn-success btn-sm me-2">Sesuai</button>
                                <button type="submit" name="status" value="tidak_sesuai"
                                    class="btn btn-danger btn-sm">Tidak Sesuai</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
@endsection
