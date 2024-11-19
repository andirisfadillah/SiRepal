<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @include('layouts.head') --}}
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End Sidebar -->

        @include('layouts.navbar')
        <!-- End Navbar -->
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-primary btn-add">Tambah Data</button>
                <div class="input-group" style="width: 200px;">
                    <span class="input-group-text">Search:</span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>




            @method('put')
            <form action="{{ route('wajib-retribusi.store') }}" method="post">
                @csrf

                <label for="nama">Nama</label>
                <input type="text" name="nama_lengkap" value="{{ $wajibRetribusi->nama_lengkap }}">
                <label for="nama">Telepon</label>
                <input type="text" name="telepon" value="{{ $wajibRetribusi->telepon }}">
                <label for="nama">Nik</label>
                <input type="text" name="nik" value="{{ $wajibRetribusi->nik }}">
                <label for="nama">Alamat</label>
                <input type="text" name="alamat" value="{{ $wajibRetribusi->alamat }}">
                <label for="nama">Kelurahan</label>
                <input type="text" name="kelurahan" value="{{ $wajibRetribusi->kelurahan }}">
                <button type="submit">Simpan data</button>
            </form>
        </div>

</html>
