@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-light-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                            </div>
                        </div>
                    </div>    
                    <div class="card-body">
                        <form action="{{ route('admin.property.update', $property->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="name" class="form-control placeholder" id="name" placeholder="{{$property->name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="rooms">Rooms</label>
                                    <input type="number" class="form-control" id="rooms" placeholder="{{$property->rooms}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" placeholder="{{$property->location}}">
                            </div>
                            <div class="form-group">
                                <label for="developer">Developer</label>
                                <input type="text" class="form-control" id="developer" placeholder="{{$property->developer}}">
                            </div>
                            <div class="form-group">
                                <label for="developer">Category</label>
                                <select class="form-control" data-toggle="select" title="Category"  data-live-search-placeholder="Search ...">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ ( $category->id == $property->categories[0]->id) ? 'selected' : '' }}> {{ $category->name }} </option>
                                    @endforeach    
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pricec">Price</label>
                                    <input type="number" class="form-control" id="price" placeholder="{{$property->price}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="longitude">Longitude</label>
                                    <input type="number" class="form-control" id="longitude" placeholder="{{number_format($property->longitude,2) }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="latitude">Latitude</label>
                                    <input type="number" class="form-control" id="latitude" placeholder="{{ number_format($property->latitude,2) }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <a class="btn btn-primary" href="{{ route('agent.property.index') }}"=> Cancel</a>
                                <button type="submit" class="btn btn-success">Update</butt\on>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection