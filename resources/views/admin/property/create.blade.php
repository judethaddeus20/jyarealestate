@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('admin.property.store') }}" enctype="multipart/form-data">
  @csrf
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
            
              
                  
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="name" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-home-line"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Property Name" name="name">
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
                    <label for="province" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="fas fa-flag"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <select name="province" id="province" class="form-control @error('province') is-invalid @enderror">
                        <option selected>Select Province</option>
                        @foreach($provinces as $province)
                          <option value="{{$province->id}}">{{$province->name}}</option>
                        @endforeach
                      </select>
                      @error('province')
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
                      <input type="text" class="form-control @error('developer') is-invalid @enderror" name="developer" id="developer" placeholder="Developer">
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
                    <label for="city" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-community-line"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <select name="city" id="city" class="form-control @error('city') is-invalid @enderror"> 
                        <option value="" selected>Select City</option>
                        @foreach($cities as $city)
                          <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                      </select>
                      @error('city')
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
                    <label for="rooms" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="fas fa-door-open"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <input type="number" class="form-control @error('rooms') is-invalid @enderror" id="rooms" placeholder="Rooms" name="rooms">
                      @error('rooms')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="location" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-at-line"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <input type="text" name="location" id="location" class="form-control @error('location') is-invalid @enderror" placeholder="Location, Street, Building"> 
                      @error('location')
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
                      <input type="number" class="form-control @error('price') is-invalid @enderror"  name="price" placeholder="Price">
                      @error('price')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="latitude" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><i class="fas fa-map-marker-alt"></i></label>
                        <div class="col-lg-10 col-md-8 col-sm-11">
                          <input type="number" class="form-control @error('latitude') is-invalid @enderror" id="latitude" placeholder="Latitude" name="latitude">
                          @error('latitude')
                          <span class="invalid-feedback" role="alert">
                              <i>{{ $message }}</i>
                          </span>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="longitude" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><i class="fas fa-map-marker-alt"></i></label>
                        <div class="col-lg-10 col-md-8 col-sm-11">
                          <input type="number" class="form-control @error('longitude') is-invalid @enderror" name="longitude" id="longitude" placeholder="Longitude">
                          @error('longitude')
                          <span class="invalid-feedback" role="alert">
                              <i>{{ $message }}</i>
                          </span>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>  
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="rooms" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-government-line"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <select class="select form-control @error('categories') is-invalid @enderror"  name="categories" data-placeholder="Select categories...">
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="url" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="fas fa-link"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <input type="url" class="form-control @error('url') is-invalid @enderror" name="url" id="url" placeholder="Youtube URL">
                      @error('url')
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
                    <label for="descrption" class="col-lg-1 col-md-2 col-sm-1 col-form-label text-muted"><i class="ri-code-box-line"></i></label>
                    <div class="col-lg-11 col-md-10 col-sm-11">
                      <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" placeholder="Description ..."></textarea>
                    </div>
                  </div>
                </div>
                
              </div>
              

              

              
            
          </div>
        </div>
      </div>       
    </div>
    <div class="row mt-2">
              <!-- Images -->
      
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card bg-light-default shadow">
          <div class="card-header bg-transparent">
              <div class="row align-items-center">
                  <div class="col">
                      <h5 class="text-uppercase text-dark ls-1 mb-1">Images and Videos</h5>
                  </div>
              </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="photos" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><span>All </span><i class="ri-image-add-line"></i></label>
                  <div class="col-lg-12 col-sm-8">
                    <input type="file" class="form-control @error('photos') is-invalid @enderror"  name="photos[]" multiple>
                    @error('photos')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>  
              
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="video" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><span>Videos </span><i class="ri-video-add-fill"></i></label>
                  <div class="col-lg-12 col-sm-8">
                    <input type="file" class="form-control @error('video') is-invalid @enderror"  name="video">
                    @error('video')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
            
  
            </div>
            <table class="table table-bordered" id="areaInputForm">
              <thead>
                <h5 class="text-uppercase">Parts/Area of the Property</h5>
                <tr>
                    <th>File</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td><input type="file" name="area[0][image]" class="form-control @error('area.*.image') is-invalid @enderror"></td>
                  <td><input type="text" name="area[0][description]" class="form-control @error('area.*.description') is-invalid @enderror" /></td>
                  <td><button type="button"  id="addAreaField" class="btn btn-outline-primary">Add Field</button></td>
                </tr>                  
                
                
              </tbody>
            </table>

            <table class="table table-bordered" id="roomInputForm">
              <thead>
                <h5 class="text-uppercase">Rooms</h5>
                <tr>
                    <th>File</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="file" name="room[0][image]" class="form-control @error('room.*.image') is-invalid @enderror" ></td>
                  <td><input type="text" name="room[0][description]" class="form-control @error('room.*.description') is-invalid @enderror" /></td>
                  <td><button type="button" id="addRoomField" class="btn btn-outline-primary">Add Field</button></td>
                </tr>
              </tbody>
            </table>
            <table class="table table-bordered" id="amenitiesInputForm">
              <thead>
                <h5 class="text-uppercase">Amenities</h5>
                <tr>
                    <th>File</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="file" name="amenities[0][image]" class="form-control @error('amenities.*.image') is-invalid @enderror"  ></td>
                  <td><input type="text" name="amenities[0][description]" class="form-control @error('amenities.*.description') is-invalid @enderror" /></td>
                  <td><button type="button" id="addAmenitiesField" class="btn btn-outline-primary">Add Field</button></td>
                </tr>
              </tbody>
            </table>
            
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="photos" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><span>All </span><i class="ri-image-add-line"></i></label>
                  <div class="col-lg-12 col-sm-8">
                    <input type="file" class="form-control @error('photos') is-invalid @enderror"  name="photos[]" multiple>
                    @error('photos')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>  
              
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="video" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><span>Videos </span><i class="ri-video-add-fill"></i></label>
                  <div class="col-lg-12 col-sm-8">
                    <input type="file" class="form-control @error('video') is-invalid @enderror"  name="video">
                    @error('video')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
  
            </div>
            
            <div class="row" id="rooms">
              <div class="col-md-12">
                <button id="roomBtn" type="button" class="btn btn-primary btn-sm float-right">Add Field</button>
                <div class="form-group row" id="rooms">
                  
                  <label for="rooms" class="col-lg-2 col-md-2 col-sm-1 col-form-label text-muted"><span>Rooms </span><i class="ri-image-add-line"></i></label>
                  <div class="col-lg-4 col-sm-8">
                    <input type="file" class="form-control @error('rooms') is-invalid @enderror"  name="rooms[]" multiple>
                    @error('rooms')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                    @enderror
                  </div>
                  <div class="col-lg-6 col-sm-8">
                    <input type="text" class="form-control @error('roons-description') is-invalid @enderror"  name="roons-description" placeholder="Description">
                    @error('roons-description')
                      <span class="invalid-feedback" role="alert">
                          <i>{{ $message }}</i>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
            </div> -->

          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <a class="btn btn-primary" href="{{ route('admin.property.index') }}"> Cancel</a>
                  <button type="submit" class="btn btn-success">Create</butt\on>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
</form>
@endsection
