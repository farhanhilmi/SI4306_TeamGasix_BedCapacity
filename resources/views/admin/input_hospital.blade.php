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
                            <form action="/data/hospitals" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Rumah Sakit</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama Rumah Sakit" name="nama" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat"
                                        name="alamat" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                        name="email" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NO HP</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="NO HP"
                                        name="no_telp_rs" required />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Google Maps</label>
                                    <textarea type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Maps link" name="maps" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gambar Rumah Sakit</label>
                                    <input type="file" class="form-control" name="image" required />
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