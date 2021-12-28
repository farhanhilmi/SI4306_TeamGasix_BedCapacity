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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                    Patient
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    NIK</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Email</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No. HP</th>
                                {{-- <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $data)
                            <tr>
                                <td>
                                    <div class="d-flex py-1 px-2">
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$loop->iteration}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->nama}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->nik}}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$data->email}}</p>

                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$data->no_hp}}</p>

                                </td>
                                {{-- <td class="align-middle text-center">
                                    <a href="/data/patient/{{$data->id}}/show"
                                        class="text-info btn btn-sm text-sm font-weight-bold">Detail</a>
                                    <form action="/data/patient/{{$data->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-danger btn btn-sm text-sm font-weight-bold">Delete</button>
                                    </form>
                                </td> --}}
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