@extends('admin.layout')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-4 pb-2">
                    <div class="table-responsive p-0">
                        <div class="container">
                            <form action="/patient/store_rekam_medis" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Dokumen Hasil Konsultasi</label>
                                    <input type="file" class="form-control" name="image" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Catatan Lainnya</label>
                                    <textarea type="text" class="form-control"
                                        placeholder="Catatan tambahan jika ada tulis disini" name="catata"></textarea>
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