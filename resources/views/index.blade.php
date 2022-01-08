@extends('layout')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>Welcome to Ayo Sehat</h1>
        <h2>Kami disini melayani anda dengan sepenuh hati</h2>
        <button data-bs-toggle="modal" data-bs-target="#lama_atau_baru" class="btn-get-started scrollto">Get
            Started</button>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- Modal Pasien Baru/Lama -->
    <div class="modal fade" id="lama_atau_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda pasien lama atau pasien baru?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <a href="/register" class="btn btn-secondary btn-sm">Pasien Baru</a>
                    <a href="/login" class="btn btn-primary btn-sm">Pasien Lama</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Why Choose Ayo Sehat?</h3>
                        <p>
                            AyoSehat Merupakan layanan kesahatan terpercaya khususnya dalam booking ruang inap di rumah
                            sakit yang ada di sekitar Bandung. Kami mempunyai ambisi untuk mempermudah masyarakat
                            Indonesia yang mengerti kebutuhan anda.
                        </p>
                        {{-- <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Pelayanan yang Mudah</h4>

                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Akses 24 Jam</h4>

                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Kami Tersebar di Seluruh Kota Bandung</h4>

                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <div
                    class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>

                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>About Us</h3>
                    <p>AyoSehat Merupakan layanan kesahatan terpercaya khususnya dalam booking ruang inap di rumah sakit
                        yang ada di sekitar Bandung.</p>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Kami adalah Pelopor Kesehatan di Indonesia</a></h4>
                        <p class="description">Kami mempunyai ambisi untuk mempermudah masyarakat Indonesia yang
                            mengerti kebutuhan anda.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$total_hospital}}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Rumah Sakit</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="fas fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$total_kamar}}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Kamar</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>Menawarkan layanan untuk booking kamar inap di seluruh rumah sakit Bandung dengan hanya satu aplikasi
                    anda dapat langsung memesan ruangan inap di rumah sakit pilihan anda.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4><a href="/login">Pesan Kamar</a></h4>
                        <p>Langsung booking ruangan inap di rumah sakit pilihan anda melalui website kami</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4><a href="/bedcapacity">Kapasitas Rumah Sakit</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="feedback" class="appointment section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Testimonial</h2>
            </div>
            <div class="row g-4 row-cols-1 row-cols-md-3 justify-content-center">
                @foreach ($testimonials as $data)
                <div class="col">
                    <div class="card d-flex flex-column justify-content-between align-items-cente p-4 shadow"
                        style="border-radius: 20px; border:none; height: 200px;">
                        <h6 class="fw-bold" style="color: #2C4964; text-align:center;">"{{$data->testimonial}}"</h6>
                        <p class="text-center">~{{$data->nama}}~</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Lokasi Kamai</h2>
                <p>Kunjungi lokasi perusahaan kami</p>
            </div>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3528.231352573042!2d107.63303124683175!3d-6.973197304686624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1639971064905!5m2!1sid!2sid"
                frameborder="0" allowfullscreen></iframe>
        </div>


    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection