@extends('../admin.layout')
@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pasien Dirawat</p>
              <h5 class="font-weight-bolder mb-0">
                {{$total_dirawat}}
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
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Kamar</p>
              <h5 class="font-weight-bolder mb-0">
                {{$total_kamar}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
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
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pengelola</p>
              <h5 class="font-weight-bolder mb-0">
                {{$total_pengelola}}
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
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Hopital</p>
              <h5 class="font-weight-bolder mb-0">
                {{$total_hospital}}
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
  <div class="container">
    <div class="card p-4 mb-3">
      <div class="row">
        <div class="col-4">
          <form action="/data/rekap/bulanan" method="post">
            <div class="">
              @csrf
              <div class="">
                <label for="exampleInputEmail1" class="form-label">Rekap Bulanan</label>
                <select name="bulan" class="form-select" aria-label="Default select example">
                  <option selected disabled>Pilih Bulan</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">July</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 col-5 align-self-end">Submit</button>
          </form>
        </div>


        <div class="col-8 d-flex align-items-center justify-content-center">

          @if (isset($bulan))
          @php
          $monthNum = $bulan;
          $dateObj = DateTime::createFromFormat('!m', $monthNum);
          $monthName = $dateObj->format('F');
          @endphp
          <div class="row">
            <h3>Bulan {{$monthName}}</h3>
            <div class="card p-4 bg-gradient-primary me-3 col shadow d-flex flex-column justify-content-center align-items-center">
              <h6 class="text-white text-center">Kamar Dipesan</h6>
              <h3 class="text-white">{{$pesan_kamar->count()}}</h3>
            </div>
            <div class="card col bg-gradient-primary p-4 me-3 shadow d-flex flex-column justify-content-center align-items-center">
              <h6 class="text-white text-center">Total Kamar Ditambahkan</h6>
              <h3 class="text-white">{{$kamarByMonth->count()}}</h3>
            </div>
            <div class="card bg-gradient-primary col p-4 shadow d-flex flex-column justify-content-center align-items-center">
              <h6 class="text-white text-center">Pasien Sedang Dirawat</h6>
              <h3 class="text-white">{{$sedang_rawat->count()}}</h3>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  @if (isset($bulan))
  @php
  $monthNum = $bulan;
  $dateObj = DateTime::createFromFormat('!m', $monthNum);
  $monthName = $dateObj->format('F');

  @endphp
  <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Tagihan Selama Bulan {{$monthName}}</h6>
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
                  Jenis Rawat</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Biaya Total
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Status</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($tagihan as $data)
              @php
              $date = date('m',strtotime($data->created_at))
              @endphp
              @if ($date == $bulan)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">{{$data->id_patient}}</h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> {{$data->jenis_rawat}} </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> {{$data->biaya_total}} </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> {{$data->status}} </span>
                </td>
              </tr>
              {{-- @else
              <td colspan="4" class="align-middle text-center text-sm">
                <span class="text-xs font-weight-bold"> Tidak ada data </span>
              </td> --}}
              @endif

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endif

</div>


@if (isset($bulan))
@php
$monthNum = $bulan;
$dateObj = DateTime::createFromFormat('!m', $monthNum);
$monthName = $dateObj->format('F');

@endphp
<div class="col-lg-6 col-md-6 mb-md-0 mb-4">
  <div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Pasien Terdaftar Bulan {{$monthName}}</h6>
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
                Nama Patient</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Email
              </th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Created At</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($patient as $data)
            @php
            $date = date('m',strtotime($data->created_at))
            @endphp
            @if ($date == $bulan)
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
                <span class="text-xs font-weight-bold"> {{$data->email}} </span>
              </td>
              <td class="align-middle text-center text-sm">
                <span class="text-xs font-weight-bold"> {{$data->created_at}} </span>
              </td>
            </tr>
            {{-- @else
            <td colspan="4" class="align-middle text-center text-sm">
              <span class="text-xs font-weight-bold"> Tidak ada data </span>
            </td> --}}
            @endif

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endif
@endsection