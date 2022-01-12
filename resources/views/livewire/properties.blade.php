<div class="container">
    
    <div class="d-flex flex-nowrap">
        
        <div class="ml-auto">
            <ul id="portfolio-flters">
                <li wire:click="showAllProperties">View All</li>
                <li wire:click="$set('sortBy', 'desc')"><a>Latest</a></li>
                <li wire:click="$set('sortBy', 'asc')""><a>Oldest</a></li>
            </ul>
        </div>
        
    </div>
    
    
    
    <div class="row gx-3">
        <div class="text-muted" wire:loading.delay.shortest>
            Loading...
        </div>
    </div>
    
    
    <div class="row gx-3 portfolio-container " data-aos="fade-up" data-aos-delay="200">
        @forelse($properties as $property)
            <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-app">
                <div class="portfolio-wrap">
                @foreach($property->images as $image)
                    @foreach(explode('|',$image->name) as $img)
                        @if($loop->first)
                            <img src="{{ asset($img) }}" alt="Property Image">
                        @endif
                    @endforeach
                @endforeach
                @if(count($property->images))
                    
                    
                    
                @else
                    <img src="{{ asset('images/default-image.jpg') }}" alt="No Image Found">
                @endif

                    
                    <div class="portfolio-info">
                        <h4 class="text-dark"></h4>
                        
                        <div class="portfolio-links">
                        
                            <a wire:model="viewed" href="{{ url('properties',$property) }}" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-column">
                    <span>{{$property->name}}</span>    
                    <p>&#8369;{{number_format($property->price,2)}}<span class="p-2">&#9741;</span>{{$property->cities->first()->name}}</p>
                    <div class="body">
                    <p style="font-size: 12px; font-style: italic;">{{$property->developer}}<span class="p-2">&bull;</span>Listed {{$property->created_at->diffForHumans()}}</p>
                    </div>
                </div>  
            </div>
        @empty
            <div class="text-center text-muted my-2 p-2">
                <h6>No records found...</h6>
            </div>
        @endforelse
        
    </div>

</div>

