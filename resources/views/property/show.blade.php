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
        <div class="container shadow-lg pb-3 rounded">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset($property->images[0]->name) }}" alt="Image">
                            </div>
                        </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info shadow-lg p-3 rounded">
                    <h3>Property Information</h3>
                    <ul>
                        <li><strong>Category</strong>: {{$property->categories[0]->name}}</li>
                        <li><strong>Reservation Fee</strong>: ₱ {{ number_format($property->price*0.15,2) }}</li>
                        <li><strong>Monthly Equity for 18 months</strong>: ₱ {{ number_format(($property->price*0.15*1.5)/100,2) }}</li>
                        <li><strong>Regular Cut</strong>: {{number_format(rand(1,1000))}} square meter</a></li>
                        <li><strong>Location</strong>: {{ $property->location }}</a></li>
                        <li><strong>Rooms</strong>:{{ $property->rooms }}</a></li>
                        <li><strong>Price</strong>: ₱ {{ number_format($property->price,2) }}</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>{{$property->name}}</h2>
                    <p>
                        Amenities like swimming pool, basketball court, clubhouse and etc. If you avail the spot cash down payment you will 
                        have a discount of <span class="text-success">15%</span> for the total price .
                        Save as much as <span class="text-success">₱ {{ number_format(225000,2) }}</span>
                    </p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection