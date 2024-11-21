<!doctype html>
<html lang="en">

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="th.jpeg" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('StyleLogin/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-8">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="StyleLogin/images/kapal.png" width="110" height="110" class=""></img>
                        </div>
                        <h3 class="text-center mb-4">SIREBON</h3>
                        <form action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <div class="form-outline mb-4">
                                <div style="position: relative;" size="30">
                                    <i class="fa fa-user"
                                        style="position: absolute; left: 10px; top: 10px; color: #000000;"></i>
                                    <input type="text" name="username" class="form-control form-control-lg"
                                        placeholder="Masukkan username" size="30"
                                        style="padding-left: 30px; height: 40px;" />
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <div style="position: relative;" size="30">
                                    <i class="fa fa-lock"
                                        style="position: absolute; left: 10px; top: 10px; color: #000000;"></i>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Masukkan password" size="30"
                                        style="padding-left: 30px; height: 40px;" />
                                </div>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-md-right">
                                    {{-- <a href="{{route('forgot_pasword.index')}}">Lupakan password</a> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Login Gagal!',
                    text: "{{ session('error') }}",
                    icon: 'error',
                    confirmButtonText: 'Coba Lagi'
                });
            });
        </script>
    @endif

    <script src="{{ asset('Login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Login/js/popper.js') }}"></script>
    <script src="{{ asset('Login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Login/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
