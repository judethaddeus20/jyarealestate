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
                          <h5 class="text-uppercase text-dark ls-1 mb-1">Create new property</h5>
                      </div>
                  </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('admin.property.store') }}" enctype="multipart/form-data">
                @csrf
                  <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-shop"></i></span>
                          </div>
                          <input type="text" class="form-control" name="name" placeholder="Property Name" title="Name">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                          </div>
                          <input type="number" class="form-control" name="longitude" placeholder="Longitude" title="Longitude">
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tag"></i></span>
                          </div>
                          <input type="number" class="form-control" name="price" placeholder="Price"  title="Price">
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                          </div>
                          <input type="number" class="form-control" name="latitude" placeholder="Latitude"  title="Location">
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-settings"></i></span>
                          </div>
                          <input type="text" class="form-control" name="developer" placeholder="Developer" title="Developer">
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                          </div>
                          <input type="text" class="form-control" name="location" placeholder="Location" title="Location">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-image"></i></span>
                          </div>
                          <input type="number" class="form-control"  name="rooms" placeholder="Rooms" title="Rooms">
                        </div> 
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="select form-control"  name="categories" data-placeholder="Select categories...">
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <textarea class="form-control" name="description" rows="3" placeholder="Description ..."></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-image"></i></span>
                          </div>
                          <input type="file" class="form-control"  name="photos[]" multiple>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success float-right w-25">Add</button>
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

@push('scripts')
<script>
    $(".select").select2({
              tags: true,
          });
  </script>
@endpush


@push('js')
  
  <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush