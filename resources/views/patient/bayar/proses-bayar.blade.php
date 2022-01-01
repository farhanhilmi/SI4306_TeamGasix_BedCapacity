@extends('../../admin.layout')
@section('content')

<div class="">
    <div class="d-flex justify-content-between">
        <h3>Pembayaran</h3>
    </div>
    <hr>

</div>

<div class="container d-flex flex-column align-items-center">
    <div class="mt-2 card shadow p-5 d-flex flex-column align-items-center">
        <h6 class="fw-bold">Terima kasih atas kepercayaan anda. Kami akan melakukan konfirmasi jika anda sudah melakukan
            pembayaran</h6>
        <p class="fw-bold">Silakan melakukan pembayaran ke nomor rekening dibawah dengan total pembayaran seperti yang
            tercantum dibawah ini:</p>
        <h4 class="fw-bold">Total Bayar
            {{rupiah($tagihan->biaya_total)}}
        </h4>
        <div class="d-flex align-items-center mt-5 mb-5">
            <img src="/images/Transfer BCA.png" width="250" height="100" alt="" srcset="">
        </div>
        <h5>Lakukan pembayaran ke</h5>
        <h5 class="fw-bold">4450399343095893843</h5>
        <hr>
        @if (!$testimonial)
        <button data-bs-toggle="modal" data-bs-target="#testimoni" class="bg-gradient-dark btn btn-sm">Click disini
            untuk mengisi testimonial
        </button>
        @else
        <button data-bs-toggle="modal" disabled data-bs-target="#testimoni" class="bg-gradient-dark btn btn-sm">Click
            disini
            untuk mengisi testimonial
        </button>
        @endif
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="testimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feedback Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/patient/testimonial" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama pasien</label>
                        <input type="text" value="{{current_pasien()->nama}}" readonly name="nama" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Testimoni</label>
                        <textarea name="testimonial" rows="5" class="form-control"
                            placeholder="Tuliskan testimonial anda selama menggunakan aplikasi kami"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm bg-gradient-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection