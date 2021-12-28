<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <title>
        Booking Kamar
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="/patient/dashboard">
                AyoSehat
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            {{-- <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover mx-auto">
                    <li class="nav-item mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center ">
                            Docs
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center ">
                            Docs
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a role="button"
                            class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center ">
                            Docs
                        </a>
                    </li>
                </ul>

            </div> --}}
        </div>
    </nav>
    <!-- End Navbar -->
    @yield('content')

    <footer class="footer pt-3 mt-auto">
        <div class="container-fluid ">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 d-flex flex-column align-items-center mb-lg-0 mb-4 ">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © 2021,
                        made with <i class="fa fa-heart"></i> by
                        <a class="font-weight-bold">GasixTim</a>
                        for better bed capacity management.
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>