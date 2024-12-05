@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Kategori</div>
                </div>
                <form action="{{ route('wajib-retribusi.store') }}" method="post">
                    <div class="card-body">
                        @csrf
                        {{-- form nama --}}
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                                <div class="invalid-feedback">
                                    @error('nama_lengkap')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- form nama --}}
                        {{-- form nama --}}
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Telepon</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control @error('telepon') is-invalid @enderror"
                                    name="telepon" value="{{ old('telepon') }}">
                                <div class="invalid-feedback">
                                    @error('telepon')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- form nama --}}
                        {{-- form nama --}}
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nik">Nik</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik"
                                    value="{{ old('nik') }}">
                                <div class="invalid-feedback">
                                    @error('nik')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- form nama --}}
                        {{-- form nama --}}
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" value="{{ old('alamat') }}">
                                <div class="invalid-feedback">
                                    @error('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="kelurahan">Keluruhan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('kelurahan') is-invalid @enderror"
                                    name="kelurahan" value="{{ old('kelurahan') }}">
                                <div class="invalid-feedback">
                                    @error('kelurahan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mt-5">Akun Wajib Retribusi</h5>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="username">Username</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}">
                                <div class="invalid-feedback">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}">
                                <div class="invalid-feedback">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password') }}">
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- form nama --}}

                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-secondary btn-sm" href="{{ route('wajib-retribusi.index') }}">Kembali</a>
                        <button class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
