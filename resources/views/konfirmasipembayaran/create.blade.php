@extends('layouts.master')

@section('content')
    @include('layouts.alert')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Konfirmasi Pembayaran</div>
                </div>
                <form action="{{ route('Konfirmasi-pembayaran.store') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Jenis Bank</label>
                            </div>
                            <div class="col-md-9">
                                <select name="id_ref_bank" class="form-control @error('id_ref_bank') is-invalid @enderror"
                                    id="">
                                    @foreach ($bank as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_bank }}</option>
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
                                <label for="nama">Nomer Rekening</label>
                            </div>
                            <div class="col-md-9">
                                <select name="id_ms_rekening"
                                    class="form-control @error('id_ms_rekening') is-invalid @enderror" id="">
                                    @foreach ($rekening as $item)
                                        <option value="{{ $item->id }}">{{ $item->no_rekening }} -
                                            {{ $item->nama_akun }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('id_ms_rekening')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nominal_transfer">Nominal Transfer</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" class="form-control @error('nominal_transfer') is-invalid @enderror"
                                    name="nominal_transfer" value="{{ old('nominal_transfer') }}">
                                <div class="invalid-feedback">
                                    @error('nominal_transfer')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="nama">Bukti Pembayaran</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control @error('file_bukti') is-invalid @enderror"
                                    name="file_bukti" value="{{ old('file_bukti') }}">
                                <div class="invalid-feedback">
                                    @error('file_bukti')
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
