@extends('Layouts.main')

@section('title')
    Kategori
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
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-title">Data Kategori</div>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary"> 
                        <span class="btn-label">
                            <i class="fa fa-plus"></i>
                        </span>
                        Tambah
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th width="10%">No</th>
                            <th>Kategori</th>
                            <th><i class="fa fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
