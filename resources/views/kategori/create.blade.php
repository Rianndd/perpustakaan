@extends('Layouts.main')

@section('title')
    Tambah Kategori
@endsection

@section('style')
@endsection

@section('content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Kategori</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="/">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="/">Kategori</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="text-white">Tambah Kategori</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <div class="col-md-6">
                        <label for="first-name-horizontal">Kategori</label>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori" required>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-end">
                    <a href="{{ route('kategori') }}" class="btn btn-warning me-1 mb-1">Kembali</a>
                    <button type="submit" class="btn btn-primary me-1 mb-1">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
