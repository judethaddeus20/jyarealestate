<div class="container">
    <div class="d-flex flex-nowrap">
        <div class="mr-2">
            <div class="input-group mb-2  shadow-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Find by Type</span>
                </div>
                <select class="form-control" wire:model="byType" data-placeholder="Select a City">
                    <option value="Mansion">Mansion</option>
                    <option value="Single Detached">Single Detached</option>
                    <option value="House and Lot">House and Lot</option>
                    <option value="Villa">Villa</option>
                </select>
            </div>
        </div>
        <div class="mr-2">
            <div class="input-group mb-2  shadow-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Select City</span>
                </div>
                <select class="form-control" wire:model="byCity" data-placeholder="Select a City">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="">
            <div class="input-group mb-2  shadow-sm pl-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">Select Price</span>
                </div>
                
                <select class="form-control" wire:model="byPrice" data-placeholder="Select a City">
                    <option value=1000000>&#8369;{{number_format(1000000,2)}} to &#8369;{{number_format(10000000,2)}}</option>
                    <option value=10000000>&#8369;{{number_format(10000000,2)}} to &#8369;{{number_format(50000000,2)}}</option>
                    <option value=50000000>&#8369;{{number_format(50000000,2)}} to &#8369;{{number_format(100000000,2)}}</option>
                    <option value=100000000>&#8369;{{number_format(100000000,2)}} to &#8369;{{number_format(500000000,2)}}</option>
                    <option value=500000000>&#8369;{{number_format(500000000,2)}} to &#8369;{{number_format(1000000000,2)}}</option>
                    <option value=1000000000>&#8369;{{number_format(1000000000,2)}} up</option>
                </select>
            </div>
            
        </div>
        <div class="ml-auto">
            <ul id="portfolio-flters">
                <li wire:click="resetVars"><a>Reset</a></li>
                <li wire:click="$set('sortBy', 'desc')"><a>Latest</a></li>
                <li wire:click="$set('sortBy', 'asc')"><a>Oldest</a></li>
            </ul>
        </div>
    </div>
    <div class="row gx-3">
        <div class="text-muted" wire:loading.delay.shortest>
            Loading...
        </div>
    </div>
    <div class="row gx-3 portfolio-container "data-aos-offset=0 data-aos-easing="ease-in-out">
        @forelse($properties as $property)
            <div class="col-lg-3 col-md-6 col-sm-12 portfolio-item filter-app ">
                <div class="portfolio-wrap">
                    @if(count($property->images))
                        @foreach($property->images as $image)
                            @foreach(explode('|',$image->name) as $img)
                                @if($loop->first)
                                    <img src="{{ asset($img) }}" alt="Property Image">
                                @endif
                            @endforeach
                        @endforeach                
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
                    <p style="font-size: 12px; font-style: italic;">{{$property->categories->first()->name}}<span class="p-2">&bull;</span>Listed {{$property->created_at->diffForHumans()}}</p>
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
