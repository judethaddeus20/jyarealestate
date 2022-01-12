@extends('layouts.main')
@section('content')
    @include('partials.guest.header')
    <main id="main">

        <!--  Breadcrumbs  -->
        <section class="breadcrumbs bg-light text-dark">
            <div class="container">
                <ol>
                <li ><a class="text-dark" href="{{ url('/') }}">Home</a></li>
                <li>Propery Details</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
        <!--  Portfolio Details Section  -->
        
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4 shadow-lg">
                    <div class="col-lg-8">
                            @if(count($property->videos))
                                    @foreach($property->videos as $video)
                                        <div class="embed-responsive embed-responsive-21by9">
                                            <iframe class="embed-responsive-item" src="{{ asset($video->name) }}"></iframe>
                                        </div>

                                    @endforeach
                                @endif
                        <div class="portfolio-details-slider swiper mb-2">
                            <h4>Property Photos</h4>
                            <div class="swiper-wrapper">
                                
                                @if(count($property->images))
                                    @foreach($property->images as $image)
                                        @foreach(explode('|',$image->name) as $img)
                                            <div class="swiper-slide shadow-md">
                                                <div class="portfolio-details-info">
                                                    
                                                    
                                                    <div class="portfolio-links">
                                                        <a href="{{ asset($img) }}" data-fancybox="gallery" class="portfokio-lightbox" title="{{$property->name}}"><i class="bi bi-zoom-in"></i></a>
                                                    </div>
                                                </div>
                                                <img src="{{ asset($img) }}" alt="Property Image">
                                            </div>
                                            
                                        @endforeach
                                    @endforeach 
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/default-image.jpg') }}" alt="Property Image">
                                    </div>
                                @endif
                                

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                        
                        <div class="portfolio-details-slider swiper mb-2">
                            <h4>Area</h4>
                            <div class="swiper-wrapper">
                                @if(count($property->areas))
                                    @foreach($property->areas as $area)
                                        <div class="swiper-slide shadow-md">
                                            <h5>{{$area->description}}</h5>
                                            <div class="portfolio-details-info">
                                                
                                                
                                                <div class="portfolio-links">
                                                    <a href="{{ asset($area->file) }}" data-fancybox="gallery" class="portfokio-lightbox" title="{{$property->name}}"><i class="bi bi-zoom-in"></i></a>
                                                </div>
                                            </div>
                                            <img src="{{ asset($area->file) }}" alt="Property Image">
                                        </div>
                                        
                                    @endforeach 
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/default-image.jpg') }}" alt="Property Image">
                                    </div>
                                @endif
                                

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                        <div class="portfolio-details-slider swiper mb-2">
                            <h4>Rooms</h4>
                            <div class="swiper-wrapper">
                                @if(count($property->hasRooms))
                                    @foreach($property->hasRooms as $room)
                                        <div class="swiper-slide shadow-md">
                                            <h5>{{$room->description}}</h5>
                                            <div class="portfolio-details-info">
                                                
                                                
                                                <div class="portfolio-links">
                                                    <a href="{{ asset($room->file) }}" data-fancybox="gallery" class="portfokio-lightbox" title="{{$property->name}}"><i class="bi bi-zoom-in"></i></a>
                                                </div>
                                            </div>
                                            <img src="{{ asset($room->file) }}" alt="Property Image">
                                        </div>
                                        
                                    @endforeach 
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/default-image.jpg') }}" alt="Property Image">
                                    </div>
                                @endif
                                

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                        <div class="portfolio-details-slider swiper mb-2">
                            <h4>Amenities</h4>
                            <div class="swiper-wrapper">
                                @if(count($property->amenities))
                                    @foreach($property->amenities as $amenity)
                                        <div class="swiper-slide shadow-md">
                                            <h5>{{$amenity->description}}</h5>
                                            <div class="portfolio-details-info">
                                                
                                                
                                                <div class="portfolio-links">
                                                    <a href="{{ asset($amenity->file) }}" data-fancybox="gallery" class="portfokio-lightbox" title="{{$property->name}}"><i class="bi bi-zoom-in"></i></a>
                                                </div>
                                            </div>
                                            <img src="{{ asset($amenity->file) }}" alt="Property Image">
                                        </div>
                                        
                                    @endforeach 
                                @else
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/default-image.jpg') }}" alt="Property Image">
                                    </div>
                                @endif
                                

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev text-dark"></div>
                            <div class="swiper-button-next text-dark"></div>
                        </div>
                        
                    </div>
                

                    <div class="col-lg-4">
                        <div class="portfolio-info shadow-lg p-3 rounded">
                            <h4>Property Information</h4>
                            <ul>
                                <li><strong>Category</strong>: {{$property->categories->first()->name}}</li>
                                <li><strong>Location</strong>: {{ $property->cities->first()->name }}</a></li>
                                <li><strong>Regular Cut</strong>: {{number_format(rand(1,1000))}} square meter</a></li>
                                <li><strong>Rooms</strong>:{{ $property->rooms }}</a></li>
                                <li><strong>Monthly Equity for 18 months</strong>: &#8369;{{ number_format(($property->price*0.15*1.5)/100,2) }}</li>
                                <li><strong>Reservation Fee</strong>: &#8369;{{ number_format($property->price*0.15,2) }}</li>
                                <li><strong>Price</strong>: &#8369;{{ number_format($property->price,2) }}</a></li>
                                <li><strong>Youtube URL:</strong>:<a href="{{$property->url}}" target="_blank">{{$property->url}}</a></li>
                            </ul>
                        </div>
                        <div class="mt-2 portfolio-description shadow-lg p-2 rounded">
                            <h2>{{$property->name}}</h2>
                            <p>
                                {{$property->description}}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
