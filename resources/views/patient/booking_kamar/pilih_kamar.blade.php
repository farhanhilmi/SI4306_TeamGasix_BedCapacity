@extends('./patient/layout_patient')
@section('content')
<section class="min-vh-100 mb-8">
    <div class="page-header d-flex flex-column align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('/assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <a href="/patient/booking" class="btn bg-gradient-primary my-4 mb-2">Kembali Pilih Rumah Sakit</a>
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h5 class="text-white mb-2 mt-5">Silakan Pilih Kamar di {{$hospital->nama}}!</h5>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="row g-4 mt-5">
                @foreach ($kamar as $data)
                <div class="modal fade" id="book{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tanggal Check In</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form action="/patient/booking/kamar/booknow" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Check In</label>
                                        <input type="date" class="form-control" required name="check_in">
                                    </div>
                                    <input type="hidden" name="id_kamar" value="{{$data->id}}">
                                    <input type="hidden" name="biaya_total" value="{{$data->harga}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-secondary-dark btn-sm"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn bg-gradient-dark btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/kamar/{{$hospital->nama}}/{{$data->gambar}}" class="card-img-top" alt="...">
                        <div class="card-body" style="height: 330px">
                            <h6 class="card-title">Kelas {{$data->kelas}}</h6>
                            <h5 class="card-title">{{$data->nama}}</h5>
                            <p class="card-text">{{Str::limit($data->deskripsi, 100,
                                $end='...')}}</p>
                            <h6 class="card-title">{{rupiah($data->harga)}}</h6>

                            <button type="button" data-bs-toggle="modal" data-bs-target="#book{{$data->id}}"
                                class="btn bg-gradient-dark w-100 my-4 mb-2">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->

                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection