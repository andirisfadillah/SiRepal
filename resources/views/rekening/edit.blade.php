@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Kategori</div>
                </div>
                <form action="{{ route('rekening.update', $rekening->id) }}" method="post">
                    <div class="card-body">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="bank">Bank</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control @error('id_ref_bank') is-invalid @enderror" name="id_ref_bank">
                                    @foreach ($bank as $item)
                                        <option value="{{ $item->id }}" @if ($item->id == $rekening->id_ref_bank) selected @endif>{{ $item->nama_bank }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('id_ref_bank')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama_akun">Nama Akun</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('nama_akun') is-invalid @enderror"
                                    name="nama_akun" value="{{ old('nama_akun', $rekening->nama_akun) }}">
                                <div class="invalid-feedback">
                                    @error('nama_akun')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="no_rekening">No Rekening</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('no_rekening') is-invalid @enderror"
                                    name="no_rekening" value="{{ old('no_rekening', $rekening->no_rekening) }}">
                                <div class="invalid-feedback">
                                    @error('no_rekening')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a class="btn btn-secondary btn-sm" href="{{ route('rekening.index') }}">Kembali</a>
                        <button class="btn btn-primary btn-sm">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
