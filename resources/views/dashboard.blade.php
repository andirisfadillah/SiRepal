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
        {{-- <p class="text-danger">Anda tidak memiliki akses ke halaman ini.</p> --}}
        @extends('layouts.master')

@section('content')
    @if (auth()->user()->level == 'admin')
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        </div>
        <div class="row">
            <!-- Card: Jumlah Sudah Bayar -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Jumlah Sudah Bayar</p>
                                    <h4 class="card-title">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card: Jumlah Belum Bayar -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Jumlah Belum Bayar</p>
                                    <h4 class="card-title">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card: Jumlah Pemasukan -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-luggage-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Jumlah Pemasukan</p>
                                    <h4 class="card-title">Rp. 0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
    @endif
@endsection
