<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

use Livewire\WithPagination;
use DB;
class Properties extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchQuery;
    public $byCity = null;
    public $filter=[];
    public $sortBy ='desc';
    public $images;
    public $thumbnail;
    public function render()
    {
        $subcategory = Category::whereNotNull('parent_id')->get();
        $searchQuery = '%'.$this->searchQuery.'%';
       
        
        $images = $this->images;
        $thumbnail = $this->thumbnail;
        $properties = Property::with('categories','images','cities')
        ->where('price','LIKE',$searchQuery)
        ->orWhere('name','LIKE',$searchQuery)
        ->orderBy('created_at',$this->sortBy)
        ->take(4)
        ->get();
        $properties->map (function ($item){ 
            $item->images->map(function ($image){
                
                
                $thumbnail = $image[0];
                
                $this->images[] = $image;
                $this->thumbnail = $thumbnail;

            });
        });
        

        /* dd($this->images); */
        
        
        return view('livewire.properties',compact('properties','subcategory','images','thumbnail'));
    }   

    public function showAllProperties(){
        return redirect()->route('all');
    }



    
}
