@extends('admin.layout')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                {{-- <div class="card-header pb-0">
                    <h5>Input Rumah Sakit</h5>
                </div> --}}
                <div class="card-body px-0 pt-4 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container">
                            <form action="/data/pengelola" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Pengelola</label>
                                    <input type="text" class="form-control" placeholder="Nama Pengelola" name="nama"
                                        required />
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rumah Sakit</label>
                                    <select class="form-select" name="id_hospital" aria-label="Default select example">
                                        <option disabled selected>Silakan Pilih Rumah Sakit Pengelola Bertugas</option>
                                        @foreach ($hospitals as $data)
                                        <option value="{{$data->id}}">{{$data->nama}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('id_hospital'))
                                    <span class="text-danger">{{ $errors->first('id_hospital') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat"
                                        name="alamat" required />
                                    @if ($errors->has('alamat'))
                                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                        name="email" required />
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1"
                                        placeholder="Password" name="password" required />
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection