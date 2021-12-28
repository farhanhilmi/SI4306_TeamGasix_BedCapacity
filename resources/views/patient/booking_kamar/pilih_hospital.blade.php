@extends('./patient/layout_patient')
@section('content')
<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h5 class="text-white mb-2 mt-5">Silakan Pilih Rumah Sakit Tujuan!</h5>
                    {{-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                        project for free.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Booking</h5>
                    </div>
                    <div class="card-body">
                        <form role="form text-left" action="/patient/booking/kamar" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Rumah Sakit</label>
                                <select class="form-select" name="id_hospital" aria-label="Default select example">
                                    <option selected disabled>Open this select menu</option>
                                    @foreach ($hospital as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('id_hospital'))
                                <span class="text-danger">{{ $errors->first('id_hospital') }}</span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Selanjutnya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection