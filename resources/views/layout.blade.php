<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AyoSehat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="users/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="users/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="users/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="users/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="users/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="users/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="users/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="users/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="users/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="users/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Ayo Sehat</a></h1>
            <!-- <a href="index.html" class="logo me-auto"><img src="users/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto " href="#feedback"> Testimonial</a></li>
                    <li class="dropdown"><a href="#"><span> Login </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register </a></li>
                        </ul>
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Ayo Sehat</h3>
                        <p>
                            Bojong Soang Street <br>
                            Bandung, West Java<br>
                            Indonesian <br><br>
                            <strong>Phone:</strong> 022 55555555<br>
                            <strong>Email:</strong> ayosehat@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Ayo Sehat</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="users/assets/vendor/purecounter/purecounter.js"></script>
    <script src="users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="users/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="users/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="users/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="users/assets/js/main.js"></script>

</body>

</html>