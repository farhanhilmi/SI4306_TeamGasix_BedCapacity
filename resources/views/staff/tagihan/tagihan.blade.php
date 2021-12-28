@extends('admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                {{-- <h6>Data Rumah Sakit</h6> --}}
                {{-- <a href="/rawat/tagihan/create" class="btn btn-primary text-white btn-sm">Tambah Data Kamar</a>
                --}}
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                    Pasien
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis
                                    Rawat
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Harga Obat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Check In - Check Out</th>
                                {{-- <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Check Out</th> --}}
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Biaya Total</th>
                                {{-- <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
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
                                    <p class="text-xs font-weight-bold mb-0">{{$data->nama_patient}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">{{$data->jenis_rawat}}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{rupiah($data->harga_obat)}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->check_in}} - {{$data->check_out}}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->status}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{rupiah($data->biaya_total)}}</p>
                                </td>
                                <td class="align-middle text-center justify-content-center d-flex">
                                    {{-- <a href="/staff/tagihan/{{$data->id}}/edit"
                                        class="text-secondary btn btn-sm text-sm font-weight-bold">Edit</a> --}}
                                    <button type="button" class="btn bg-gradient-dark btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{$data->id}}">
                                        Edit
                                    </button>

                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="/staff/tagihan/{{$data->id}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <select class="form-select" name="status"
                                                    aria-label="Default select example">
                                                    <option selected disabled>Status</option>
                                                    <option value="Sudah Bayar">Sudah Bayar</option>
                                                    <option value="Belum Bayar">Belum Bayar</option>
                                                    <option value="Dalam Perawatan">Dalam Perawatan</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn bg-gradient-dark btn-sm">Save
                                                    changes</button>
                                            </div>
                                        </form>
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

@endsection