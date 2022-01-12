
@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-light-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-dark ls-1 mb-1">Edit User</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name</strong>
                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="{{ $user->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email</strong>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" style="height:50px" name="email"
                                            placeholder="{{ $user->email }}" value="{{ $user->email }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Phone Number</strong>
                                        <input type="number" class="form-control @error('phone_number') is-invalid @enderror" style="height:50px" name="phone_number"
                                            placeholder="{{ $user->phone_number }}" value="{{ $user->phone_number }}">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="developer">Role</label>
                                        <select class="form-control" name="role" data-toggle="select" title="Category"  data-live-search-placeholder="Search ...">
                                            @foreach ($roles as $role)
                                                <option value="{{$role['id']}}" {{ ( $role['id'] == $user->is_admin) ? 'selected' : '' }}> {{$role['name']}} </option>
                                            @endforeach    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <a class="btn btn-primary" href="{{ route('admin.user.index') }}"> Cancel</a>
                                    <button type="submit" class="btn btn-success">Update</butt\on>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection