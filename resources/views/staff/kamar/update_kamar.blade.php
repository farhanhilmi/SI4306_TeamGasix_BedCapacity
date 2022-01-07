@extends('admin.layout')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-4 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container">
                            <form action="/staff/kamar/{{$kamar->id}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">Nama Kamar</label>
                                    <input type="text" class="form-control" value="{{$kamar->nama}}"
                                        placeholder="Nama Kamar" name="nama" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kelas</label>
                                    <select class="form-select" name="kelas" aria-label="Default
                                        select example">
                                        <option selected value="{{$kamar->kelas}}">{{$kamar->kelas}}</option>
                                        <option value="VVIP">VVIP</option>
                                        <option value="VIP">VIP</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="number" value="{{$kamar->harga}}" class="form-control"
                                        placeholder="Harga" name="harga" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">QTY</label>
                                    <input type="number" value="{{$kamar->qty}}" class="form-control" placeholder="QTY"
                                        name="qty" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gambar Kamar</label>
                                    <input type="file" class="form-control" name="image" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea type="text" class="form-control" placeholder="Deskripsi kamar"
                                        name="deskripsi" required>{{$kamar->deskripsi}}</textarea>
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