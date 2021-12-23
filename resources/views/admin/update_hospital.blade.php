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
                            <form action="/data/hospitals/{{$hospital->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Rumah Sakit</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama Rumah Sakit" value="{{$hospital->nama}}" name="nama"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat"
                                        value="{{$hospital->alamat}}" name="alamat" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                        value="{{$hospital->email}}" name="email" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NO HP</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NO HP"
                                        value="{{$hospital->no_telp_rs}}" name="no_telp_rs" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Google Maps</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Maps link" name="maps" required>{{$hospital->maps}}</textarea>
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