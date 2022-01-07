@extends('../admin.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Rawat Inap</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$total_rawat_inap}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Occupied Bed</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$total_kamar_terisi}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Jenis Kamar</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$total_kamar}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row my-4">
    <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>History Rawat Inap</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID Patient</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Check In</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Check Out
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inap as $data)

                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$data->id_patient}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold"> {{$data->check_in}} </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold"> {{$data->check_out}} </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold"> {{$data->status}} </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>History Daftar Pasien</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    ID Patient</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    NIK
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Daftar Pada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasiendaftar as $data)

                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$data->id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold"> {{$data->nama}} </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold"> {{$data->nik}} </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold"> {{$data->created_at}} </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection