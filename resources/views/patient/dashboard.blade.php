@extends('../admin.layout')
@section('content')

<div class="">
    <div class="d-flex justify-content-between">
        <h2>Selamat Datang di Aplikasi AyoSehat</h2>
        @if (!pasien_layak_inap())
        <a href="/patient/create_rekam_medis" class="btn btn-sm btn-primary">Submit Rekam Medis</a>
        {{-- @else
        @if (get_rekam_medis_patient()->rekomendasi_jenis_rawat != "Pending")
        <a href="/patient/create_rekam_medis" class="btn btn-sm btn-primary">Submit Rekam Medis</a>
        @endif --}}
        @endif
    </div>
    <hr>
    @if ($errors->has('id_hospital'))
    <span class="text-danger">{{ $errors->first('id_hospital') }}</span>
    @endif
</div>

<div class="container d-flex justify-content-center">
    @if (pasien_layak_inap())
    <div class="row g-4 ">
        <h6>Untuk memesan ruangan inap silakan pilih rumah sakit tujuan anda terlebih dahulu</h6>

        @forelse ($hospital as $data)
        <div class="col-4 mt-5">
            <div class="card shadow" style="height: 550px">
                <img src="/images/hospital/{{$data->nama}}/{{$data->gambar}}" height="220px" class="card-img-top"
                    alt="...">
                <form role="form text-left" action="/patient/booking/kamar" method="POST">
                    @csrf
                    <input type="hidden" value="{{$data->id}}" name="id_hospital">
                    <div class="card-body d-flex flex-column justify-content-between" style="height: 330px">
                        <div>
                            {{-- <h6 class="card-title">Kelas {{$data->kelas}}</h6> --}}
                            <h5 class="card-title">{{$data->nama}}</h5>
                            {{-- <p class="card-text">{{Str::limit($data->deskripsi, 100,
                                $end='...')}}</p> --}}
                            <p class="text-muted mb-0">{{$data->no_telp_rs}}</p>
                            <p class="text-muted mt-0">{{$data->email}}</p>
                            <p class="text-muted">{{Str::limit($data->alamat, 70,
                                $end='...')}}</p>
                        </div>

                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2 ">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>

        @empty
        <h6>Tidak ada rumah sakit yang tersedia saat ini</h6>
        @endforelse
    </div>
    @else
    <div class="d-flex justify-content-center align-items-center flex-column">
        @if (get_rekam_medis_patient())
        <h6 class="align-self-start">Status Verifikasi Dokumen: {{get_rekam_medis_patient()->rekomendasi_jenis_rawat}}
        </h6>
        @else
        <h6 class="align-self-start">Status Verifikasi Dokumen: Belum Upload Rekam Medis</h6>
        @endif
        <h5 class="mt-5" style="width: 75%; text-align: center">Anda harus submit rekam medis terlebih dahulu jika belum
            dan
            dinyatakan layak rawat
            inap untuk pesan
            ruangan rawat inap
        </h5>
    </div>
    @endif
</div>

@endsection