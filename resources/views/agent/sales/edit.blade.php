@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-light-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="text-uppercase text-dark ls-1 mb-1">Edit Sale</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('agent.sales.update', $sales->first()->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="agent_name" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-user-shared-fill"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="text" class="form-control @error('agent_name') is-invalid @enderror" id="agent_name" placeholder="{{ old('agent_name',$sales->first()->agent_name) }}" name="agent_name" value="{{ old('agent_name',$sales->first()->agent_name) }}" >
                                        @error('agent_name')
                                            <span class="invalid-feedback" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="client_name" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-user-3-line"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name" placeholder="{{ old('client_name',$sales->first()->client_name) }}" name="client_name" value="{{ old('client_name',$sales->first()->client_name) }}" >
                                        @error('client_name')
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
                                    <label for="developer" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-building-line"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="text" class="form-control @error('developer') is-invalid @enderror" name="developer" id="developer" placeholder="{{ old('developer',$sales->first()->developer) }}" value="{{ old('developer',$sales->first()->developer) }}" >
                                        @error('developer')
                                        <span class="invalid-feedback" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="branch" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-building-line"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" id="branch" placeholder="{{ old('branch',$sales->first()->branch) }}" value="{{ old('branch',$sales->first()->branch) }}" >
                                        @error('branch')
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
                                    <label for="date_reserved" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-calendar-line"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="datetime-local" class="form-control @error('date_reserved') is-invalid @enderror" id="date_reserved" placeholder="{{ old('date_reserved',$sales->first()->date_reserved) }}" name="date_reserved" value="{{ date('Y-m-d\TH:i', strtotime($sales->first()->date_reserved)) }}" >
                                        @error('date_reserved')
                                            <span class="invalid-feedback" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="property_name" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-at-line"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="text" name="property_name" id="property_name" class="form-control @error('property_name') is-invalid @enderror" placeholder="{{ old('property_name',$sales->first()->property_name) }}" value="{{ old('property_name',$sales->first()->property_name) }}" > 
                                        @error('property_name')
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
                                    <label for="price" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-currency-line"></i></label>
                                    <div class="col-lg-11 col-md-10 col-sm-11">
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"  name="price" placeholder="{{ old('price',$sales->first()->price) }}" value="{{ old('price',$sales->first()->price) }}" >
                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="category" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-government-line"></i></label>
                                    <div class="col-lg-6 col-md-10 col-sm-11">
                                        <select class="select form-control @error('category') is-invalid @enderror"  name="category" placeholder="Select categories..." value="{{ old('category',$sales->first()->category) }}" >
                                            <option disabled selected>Model Unit</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->name}}"{{ ($category->name == $sales->first()->category) ? 'selected' : ''}}>{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <i>{{ $message }}</i>
                                                </span>
                                            @enderror
                                    </div>

                                    <label for="number_of_unit" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-numbers-line"></i></label>
                                    <div class="col-lg-4 col-md-10 col-sm-11">
                                        <input type="number" class="form-control @error('number_of_unit') is-invalid @enderror"  name="number_of_unit" placeholder="{{ old('number_of_unit',$sales->first()->number_of_unit) }}" value="{{ old('number_of_unit',$sales->first()->number_of_unit) }}" >
                                        @error('number_of_unit')
                                            <span class="invalid-feedback" role="alert">
                                                <i>{{ $message }}</i>
                                            </span>
                                        @enderror
                                    </div>
                                </div>  
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <a class="btn btn-primary" href="{{ route('agent.sales.index') }}"=> Cancel</a>
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
