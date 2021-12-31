@extends('admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                @guest
                <h1>GUEST</h1>
                @endguest
                {{-- <a href="/data/pengelola/create" class="btn btn-primary text-white btn-sm">Tambah Staff
                    Pengelola</a> --}}
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID
                                    Patient
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama
                                    Patient</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Dokumen</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Rekomendasi Rawat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Catatan</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($rekam_medis as $data)
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$data->id_patient}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Pasien:
                                                {{$data->nama_patient}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/data/patient/{{$data->id}}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Rekomendasi Jenis Rawat / Alasan </label>
                                                    {{-- <input type="hidden" name="id_patient"
                                                        value="{{$data->id_patient}}"> --}}
                                                    <input type="text" value="{{$data->rekomendasi_jenis_rawat}}"
                                                        name="jenis_rawat" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Save
                                                    changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <tr>
                                <td>
                                    <div class="d-flex py-1 px-2">
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$loop->iteration}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->id_patient}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->nama_patient}}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0"><a
                                            href="/images/rekam-medis/{{$data->id_patient}}/{{$data->dokumen}}"
                                            download>{{$data->dokumen}}</a></p>

                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$data->rekomendasi_jenis_rawat}}</p>

                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$data->catatan}}</p>

                                </td>
                                <td class="align-middle text-center">
                                    <button class="text-info btn btn-sm text-sm font-weight-bold" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{$data->id_patient}}">Update</button>

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