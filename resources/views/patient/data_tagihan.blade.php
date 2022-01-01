@extends('admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">

            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID
                                    Tagihan
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                    Kamar
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Jenis Rawat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Harga Obat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Check In - Check Out</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Biaya Kamar</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Biaya Total</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if ($count == 0) <tr>
                                <td class="bg-primary w-100">
                                    <p class="text-xs text-center font-weight-bold mb-0">Tidak ada data</p>
                                </td>
                            </tr>
                            @else --}}
                            @foreach ($tagihan as $data)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$loop->iteration}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->id}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->nama_kamar}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->jenis_rawat}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{rupiah($data->harga_obat)}}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{date('d-m-Y',
                                        strtotime($data->check_in))}} - @if ($data->check_out)
                                        {{date('d-m-Y', strtotime($data->check_out))}}
                                        @else
                                        Saat ini
                                        @endif
                                    </p>

                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{rupiah($data->biaya_kamar)}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{rupiah($data->biaya_total)}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->status}}</p>
                                </td>
                                <td class="align-middle text-center justify-content-center d-flex">
                                    @if ($data->status == 'Belum Bayar')
                                    <a href="/patient/checkout/{{$data->id}}/"
                                        class="btn bg-gradient-dark btn-sm">Bayar</a>
                                    @endif
                                    @if ($data->status == 'Dalam Perawatan' || $data->status == 'Belum Check In')
                                    <button type="button" class="btn bg-gradient-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#print{{$data->id}}">
                                        Info Booking
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="print{{$data->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$data->id}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row" id="printBooking">
                                            <div class="col-6">
                                                <h5>No Booking Kamar</h5>
                                                <h6>Nama Kamar</h6>
                                                <h6>Nama Pasien</h6>
                                                <h6>Jadwal Check In</h6>
                                            </div>
                                            <div class="col-6">
                                                <h5>: {{$data->id}}</h5>
                                                <h6>: {{$data->nama_kamar}}</h6>
                                                <h6>: {{current_pasien()->nama}}</h6>
                                                <h6>: {{date('d-m-Y',
                                                    strtotime($data->check_in))}}</h6>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm"
                                                data-bs-dismiss="modal">Close</button>
                                            {{-- <button onclick="printBooking()" type="button"
                                                class="btn bg-gradient-dark btn-sm">Print</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function printBooking() {
            var contents = document.getElementById("printBooking").innerHTML;
            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = (frame1.contentWindow) ? frame1.contentWindow : (frame1.contentDocument.document) ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>DIV Contents</title>');
    
            frameDoc.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />');
            frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;
        }
</script>

@endsection