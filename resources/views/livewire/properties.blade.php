<div class="container">
    <div class="input-group mb-2  shadow-sm p-2">
        <div class="input-group-prepend">
            <span class="input-group-text">Search by Price or Location</span>
        </div>
        <input type="text" name="search" id="search" wire:model='searchQuery' class="form-control bg-light">
    </div>
    <div class="row gy-4 portfolio-container">
    @forelse($properties as $property)

        <div class="col-lg-6 col-md-6 portfolio-item filter-app ">
            <div class="portfolio-wrap shadow-lg p-2 bg-white rounded">
                <img src="{{ asset($property->images[0]->name) }}" class="img-fluid" alt="Property Image">
                <div class="portfolio-info">
                    <h4 class="text-dark">{{$property->name}}</h4>
                    <p  class="text-dark">₱{{ number_format($property->price,2) }}</p>
                    <div class="portfolio-links">
                    
                    <a href="{{ url('properties',$property) }}" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                </div>
                @forelse($property->categories as $category)
                    <div class="text-dark">
                        <p>{{$category->name}} in {{$property->location}} with {{$property->rooms}} rooms</p>
                    </div>
                @empty
                    <div>
                        <p>No {{$searchQuery}} available in the database</p>
                    </div>
                @endforelse
            </div>
            

    
    
        </div>
    @empty
            <div>
                <p>No {{$searchQuery}} available in the database</p>
            </div>
        
    @endforelse
    
</div>

