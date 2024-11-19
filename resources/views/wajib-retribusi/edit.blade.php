@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit wajib retribusi</div>
                </div>
                <form action="{{ route('wajib-retribusi.update',$wajibRetribusi->id) }}" method="post">
                    <div class="card-body">
                        @method('put')
                        @csrf
                        {{-- form nama --}}
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                    name="nama_lengkap" value="{{ old('nama_lengkap',$wajibRetribusi->nama_lengkap) }}">
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
                                    name="telepon" value="{{ old('telepon',$wajibRetribusi->telepon) }}">
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
                                <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                    name="nik" value="{{ old('nik',$wajibRetribusi->nik) }}">
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
                                    name="alamat" value="{{ old('alamat',$wajibRetribusi->alamat) }}">
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
                                    name="kelurahan" value="{{ old('kelurahan',$wajibRetribusi->kelurahan) }}">
                                <div class="invalid-feedback">
                                    @error('kelurahan')
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
