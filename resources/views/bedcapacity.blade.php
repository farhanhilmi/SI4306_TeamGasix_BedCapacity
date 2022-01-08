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
    <!-- ======= Counts Section ======= -->


    <!-- ======= Location Section ======= -->
    <section id="location" class="location" style="margin-top: 13rem">

        <div class="container">
            <div class="row">
                <h2 class="text-center mb-4">Kamar yang tersedia saat ini</h2>
                <div class="row justify-content-center">
                    @forelse ($hospital as $data)
                    <div class="col">
                        <div class="card shadow" style="width: 20rem;">
                            <img src="/images/kamar/{{$data->nama_rs}}/{{$data->gambar}}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between" style="height: 400px">
                                <div class="">
                                    <h6 class="card-title">Kelas {{$data->kelas}}</h6>
                                    <h5 class="card-title">{{$data->nama}}</h5>
                                    <p class="card-text">{{Str::limit($data->deskripsi, 100,
                                        $end='...')}}</p>
                                    <h6 class="card-title">{{rupiah($data->harga)}}</h6>
                                    <h6 class="card-title fw-bold">Kapasitas: {{$data->qty}}</h6>
                                    <hr>
                                    <h5 class="card-title fw-bold">{{$data->nama_rs}}</h5>
                                </div>

                                <a href="/login" class="btn bg-primary w-100 my-4 mb-2">Book Now</a>
                            </div>
                        </div>
                    </div>

                    @empty
                    <h6>Tidak ada kamar yang tersedia</h6>
                    @endforelse
                </div>
            </div>
        </div>



    </section><!-- End Location Section -->

</main> @endsection