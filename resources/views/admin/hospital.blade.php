@extends('admin.layout')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                @guest
                <h1>GUEST</h1>
                @endguest
                {{-- <h6>Data Rumah Sakit</h6> --}}
                <a href="/data/hospitals/create" class="btn btn-primary text-white btn-sm">Tambah Data</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rumah
                                    Sakit
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Email</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Alamat</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No. Telp</th>
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
                            @foreach ($hospitals as $data)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$loop->iteration}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->nama}}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$data->email}}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                    <p class="text-xs font-weight-bold mb-0">{{Str::limit($data->alamat, 30,
                                        $end='...')}}</p>

                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$data->no_telp_rs}}</p>

                                </td>
                                <td class="align-middle text-center d-flex">
                                    <a href="/data/hospitals/{{$data->id}}/edit"
                                        class="text-secondary btn btn-sm text-sm font-weight-bold">Edit</a>
                                    <form action="/data/hospitals/{{$data->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-danger btn btn-sm text-sm font-weight-bold">Delete</button>
                                    </form>
                                </td>
                            </tr>
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