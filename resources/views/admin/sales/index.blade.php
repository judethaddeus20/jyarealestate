@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Dashboard</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                    <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Sales</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                        <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                    <p class="card-title">Detailed Reports</p>
                    <div class="row">
                        <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                            <div class="ml-xl-4">
                                <h1>33500</h1>
                                <h3 class="font-weight-light mb-xl-4">Sales</h3>
                                <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>  
                        </div>
                        <div class="col-md-12 col-xl-9">
                            <div class="row">
                                <div class="col-md-6 mt-3 col-xl-5">
                                    <canvas id="north-america-chart"></canvas>
                                    <div id="north-america-legend"></div>
                                </div>
                                <div class="col-md-6 col-xl-7">
                                    <div class="table-responsive mb-3 mb-md-0">
                                        <table class="table table-borderless report-table">
                                            <tr>
                                                <td class="text-muted">Illinois</td>
                                                <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </td>
                                                <td><h5 class="font-weight-bold mb-0">524</h5></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">Washington</td>
                                                <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </td>
                                                <td><h5 class="font-weight-bold mb-0">722</h5></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">Mississippi</td>
                                                <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </td>
                                                <td><h5 class="font-weight-bold mb-0">173</h5></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">California</td>
                                                <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </td>
                                                <td><h5 class="font-weight-bold mb-0">945</h5></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">Maryland</td>
                                                <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </td>
                                                <td><h5 class="font-weight-bold mb-0">553</h5></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">Alaska</td>
                                                <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </td>
                                                <td><h5 class="font-weight-bold mb-0">912</h5></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
