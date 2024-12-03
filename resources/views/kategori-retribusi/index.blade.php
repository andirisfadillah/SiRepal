@extends('layouts.master')

@section('content')
    @include('layouts.alert')
        @if ($isAdmin)
            <div class="d-flex justify-content-between align-items-center mb-2">
                <a href="{{ route('kategori-retribusi.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th class="text-center" style="width: 50px;">No.</th>
                    <th class="text-center" style="width: 200px;">Nama</th>
                    @if ($isAdmin)
                        <th class="text-center" style="width: 180px;">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoriRetribusi as $index => $data)
                    <tr>
                        <td scope="col" class="text-center">{{ $index + 1 }}.</td>
                        <td scope="col" class="text-center">
                            {{ $data->nama }}</td>
                        @if ($isAdmin)
                            <td scope="col" class="text-center">
                                <a href="{{ route('kategori-retribusi.edit', $data->id) }}"
                                    class="btn btn-primary btn-sm m-1">Ubah</a>

                                <form action="{{ route('kategori-retribusi.delete', $data->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm m-1"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    
@endsection
