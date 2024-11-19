@extends('layouts.master')

@section('content')
    @include('layouts.alert')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('rekening.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th class="text-center" style="width: 50px;">No.</th>
                    <th class="text-center" style="width: 200px;">Bank</th>
                    <th class="text-center" style="width: 200px;">Nama Akun</th>
                    <th class="text-center" style="width: 200px;">No Rekening</th>
                    <th class="text-center" style="width: 180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekening as $index => $data)
                    <tr>
                        <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                        <td scope="col" class="text-center">
                            {{ $data->bank->nama_bank }}</td>
                        <td scope="col" class="text-center">
                            {{ $data->nama_akun }}</td>
                        <td scope="col" class="text-center">
                            {{ $data->no_rekening }}</td>
                        <td scope="col" class="text-center">
                            <a href="{{ route('rekening.edit', $data->id) }}"
                                class="btn btn-primary btn-sm m-1">Ubah</a>

                            <form action="{{ route('rekening.delete', $data->id) }}" method="POST"
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
