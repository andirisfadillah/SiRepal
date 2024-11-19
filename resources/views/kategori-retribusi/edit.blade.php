@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Kategori</div>
                </div>
                <form action="{{ route('kategori-retribusi.update', $kategoriRetribusi->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama', $kategoriRetribusi->nama) }}">
                                <div class="invalid-feedback">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-secondary btn-sm" href="{{ route('kategori-retribusi.index') }}">Kembali</a>
                        <button class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
