
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Kategori</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                             <div class="table-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="input-group" style="width: 200px;">
                            <span class="input-group-text">Search:</span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>

                    <table class="table table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                                <form action="{{ route('wajib-retribusi.store') }}" method="post">
                                    @csrf
                                    <label for="nama">Nama lengkap</label>
                                    <input type="text" name="nama_lengkap">
                                    <label for="nama">Telepon</label>
                                    <input type="text" name="telepon">
                                    <label for="nama">Nik</label>
                                    <input type="text" name="nik">
                                    <label for="nama">Alamat</label>
                                    <input type="text" name="alamat">
                                    <label for="nama">Kelurahan</label>
                                    <input type="text" name="kelurahan">
                                    <button type="submit">Simpan data</button>
                                </form>
                    </table>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
