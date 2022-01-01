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

    </div>
</div>

@endsection