@extends('layouts.master')

@section('content')
    @if (auth()->check() && auth()->user()->level === 'wajib')
        <div class="row">
            <div class="col">
                <div class="card profile-card">
                    <div class="card-body">
                        <h5 class="card-title">Profil</h5>
                        <hr>
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ auth()->user()->username }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Hak Akses</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="Administrator" readonly>
                                </div>
                            </div>

                            @if (auth()->user()->wajibRetribusi)
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ auth()->user()->wajibRetribusi->nik }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ auth()->user()->wajibRetribusi->nama_lengkap }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ auth()->user()->wajibRetribusi->telepon }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ auth()->user()->wajibRetribusi->alamat }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Kelurahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"
                                            value="{{ auth()->user()->wajibRetribusi->kelurahan }}">
                                    </div>
                                </div>
                            @else
                                <p class="text-danger">Data wajib retribusi tidak ditemukan.</p>
                            @endif

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h2>Ganti Password</h2>
            <form action="" method="POST">
                @csrf
                <table class="table">
                    <tr>
                        <td><label for="current_password">Password Lama</label></td>
                        <td>
                            <input type="password" id="current_password" name="current_password" class="form-control"
                                required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="new_password">Password Baru</label></td>
                        <td>
                            <input type="password" id="new_password" name="new_password" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="new_password_confirmation">Konfirmasi Password Baru</label></td>
                        <td>
                            <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                                class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary mt-3">Ganti Password</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    @else
        <p class="text-danger">Anda tidak memiliki akses ke halaman ini.</p>
    @endif
@endsection
