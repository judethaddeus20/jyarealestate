@extends('layouts.app')

@section('content')
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
                  <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="email" class="col-sm-1 col-form-label text-muted"><i class="ni ni-email-83"></i></label>
                          <div class="col-sm-11">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email">
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <i>{{ $message }}</i>
                              </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="phone_number" class="col-sm-1 col-form-label text-muted"><i class="ni ni-mobile-button"></i></label>
                          <div class="col-sm-11">
                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Phone" name="phone_number">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="license" class="col-sm-1 col-form-label text-muted"><i class="fas fa-hashtag"></i></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control @error('license') is-invalid @enderror" id="license" placeholder="PRC License" name="license">
                            @error('license')
                            <span class="invalid-feedback" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="hlurb" class="col-sm-1 col-form-label text-muted"><i class="fas fa-hashtag"></i></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control @error('hlurb') is-invalid @enderror" id="hlurb" placeholder="HLURB" name="hlurb">
                            @error('hlurb')
                            <span class="invalid-feedback" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="name" class="col-sm-1 col-form-label text-muted"><i class="ni ni-single-02"></i></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full Name" name="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <i>{{ $message }}</i>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="password"  class="col-sm-1 col-form-label text-muted"><i class="ni ni-lock-circle-open"></i></label>
                          <div class="col-sm-11">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"name="password" id="password" placeholder="Password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <i>{{ $message }}</i>
                              </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label for="role" class="col-sm-1 col-form-label text-muted"><i class="ni ni-badge"></i></label>
                          <div class="col-sm-11">
                            <select class="form-control" data-toggle="select" title="Role Type" data-live-search="true" data-live-search-placeholder="Search ...">
                              <option value=0>Sales Agent</option>
                              <option value=1>Administrator</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="btn btn-primary" href="{{ route('admin.user.index') }}"=> Cancel</a>
                        <button type="submit" class="btn btn-success">Create</butt\on>
                      </div>
                    </div>
                </form>
              </div>
            </div>
        </div>       
      </div>
    </div>
@endsection
