@extends('../../admin.layout')
@section('content')

<div class="">
    <div class="d-flex justify-content-between">
        <h3>Ringkasan Pembayaran</h3>
        <a href="/patient/bayar/{{$tagihan->id}}" class="btn btn-sm btn-primary">Proses Pembayaran</a>
        {{-- @if (!pasien_layak_inap())
        <a href="/patient/create_rekam_medis" class="btn btn-sm btn-primary">Submit Rekam Medis</a>

        @endif --}}
    </div>
    <hr>

</div>

<div class="container d-flex flex-column align-items-center">
    <div class="card col-12 p-4">
        <div class="d-flex justify-content-between">
            <h4 class="fw-bold">Data Pasien</h4>
            <h4>No. Tagihan: {{$tagihan->id}}</h4>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <h6>Nama Lengkap</h6>
                    </div>
                    <div class="col-8">
                        <h6>: {{current_pasien()->nama}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h6>Email Address</h6>
                    </div>
                    <div class="col-8">
                        <h6>: {{current_pasien()->email}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h6>Nomor Handphone</h6>
                    </div>
                    <div class="col-8">
                        <h6>: {{current_pasien()->no_hp}}</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <h6>Waktu Rawat</h6>
                    </div>
                    <div class="col-8">
                        <h6>: {{date('d-m-Y',
                            strtotime($tagihan->check_in))}} sampai
                            {{date('d-m-Y', strtotime($tagihan->check_out))}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h6>Dirawat di</h6>
                    </div>
                    <div class="col-8">
                        <h6>: {{$tagihan->rs}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card col-12 mt-4 p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    {{-- <th scope="col">Handle</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ruang Inap</td>
                    <td>{{$tagihan->nama_kamar}}</td>
                    <td>{{rupiah($tagihan->biaya_kamar)}}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Obat</td>
                    <td>{{$tagihan->nama_obat}}</td>
                    <td>{{rupiah($tagihan->harga_obat)}}</td>
                </tr>
                <tr>
                    <th scope="col" colspan="3" class="fw-bold fs-5">Total Biaya Pembayaran</th>
                    <td colspan="2" class='fw-bold fs-5'>
                        {{rupiah($tagihan->biaya_total)}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection