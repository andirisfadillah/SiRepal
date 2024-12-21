@extends('layouts.master')
@section('content')
    @include('layouts.alert')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('wajib-retribusi.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                        <th style="width: 50px;">No.</th>
                        <th>Nama lengkap</th>
                        <th>telepon</th>
                        <th>nik</th>
                        <th>alamat</th>
                        <th>kelurahan</th>
                        @if (auth()->user()->level == 'admin')
                        <th style="width: 150px;">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($wajibRetribusi as $index => $data)
                    <tr>
                        <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                        <td scope="col" class="text-center">{{ $data->nama_lengkap }}</td>
                        <td scope="col" class="text-center">{{ $data->telepon }}</td>
                        <td scope="col" class="text-center">{{ $data->nik }}</td>
                        <td scope="col" class="text-center">{{ $data->alamat }}</td>
                        <td scope="col" class="text-center">{{ $data->kelurahan }}</td>
                        <td scope="col" class="text-center">
                            <a href="{{ route('wajib-retribusi.edit', $data->id) }}"
                                class="btn btn-primary btn-sm m-1">Ubah</a>

                            <form action="{{ route('wajib-retribusi.delete', $data->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm m-1"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




