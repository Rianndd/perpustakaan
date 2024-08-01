@extends('Layouts.main')

@section('title')
    Dashboard
@endsection

@section('style')
@endsection

@section('content')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h3 class="fw-bold mb-3">Dashboard</h3>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
            {{-- <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
            <a href="#" class="btn btn-primary btn-round">Add Customer</a> --}}
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
                    <a href="/">Dashboardd</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row row-card-no-pd mt--2">
        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5><b>Todays Income</b></h5>
                            <p class="text-muted">All Customs Value</p>
                        </div>
                        <h3 class="text-info fw-bold">$170</h3>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <p class="text-muted mb-0">Change</p>
                        <p class="text-muted mb-0">75%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5><b>Total Revenue</b></h5>
                            <p class="text-muted">All Customs Value</p>
                        </div>
                        <h3 class="text-success fw-bold">$120</h3>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <p class="text-muted mb-0">Change</p>
                        <p class="text-muted mb-0">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5><b>New Orders</b></h5>
                            <p class="text-muted">Fresh Order Amount</p>
                        </div>
                        <h3 class="text-danger fw-bold">15</h3>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <p class="text-muted mb-0">Change</p>
                        <p class="text-muted mb-0">50%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5><b>New Users</b></h5>
                            <p class="text-muted">Joined New User</p>
                        </div>
                        <h3 class="text-secondary fw-bold">12</h3>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-secondary w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <p class="text-muted mb-0">Change</p>
                        <p class="text-muted mb-0">25%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
