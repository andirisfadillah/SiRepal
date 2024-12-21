<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SIREBON</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/1.0.1/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="main-panel">
            @include('layouts.navbar')
            <div class="container">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>

            @include('layouts.footer')
        </div>
    </div>

      
    {{-- <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>

    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>
</body>
</html>
