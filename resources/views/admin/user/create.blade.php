@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-light-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-dark ls-1 mb-1">Create new user</h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                </div>
                                <input type="number" class="form-control" id="phone_number" placeholder="Phone Number">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <input type="text" class="form-control" id="name" placeholder="Full Name">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                </div>
                                <select class="form-control" data-toggle="select" title="Role Type" data-live-search="true" data-live-search-placeholder="Search ...">
                                    <option value=0>Sales Agent</option>
                                    <option value=1>Administrator</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <button type="button" class="btn btn-success float-right w-25">Add <i class="fas fa-plus"></i></button>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>       
        </div>
        
        

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush