<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
class Properties extends Component
{
    
    public $searchQuery;
    

    public function render()
    {
        
        $subcategory = Category::whereNotNull('parent_id')->get();

        $searchQuery = '%'.$this->searchQuery.'%';

        $title = 'Properties';
        
        
        if(Property::with('categories','images')){
            $properties = Property::with('categories','images')
            ->where('location','LIKE',$searchQuery)
            ->orWhere('price','LIKE',$searchQuery)
            ->orderBy('id','ASC')->take(6)->get();            
        }
        
            

        return view('livewire.properties',compact('properties','title','subcategory'));
        
    }   

        

    
}
