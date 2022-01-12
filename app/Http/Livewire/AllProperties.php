<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\City;
class AllProperties extends Component
{
    public $byCity = null;
    public $byPrice;
    public $byType;
    public $sortBy = 'desc';
    
    
    public function render()
    {
        $cities = City::all();
        
        $properties = Property::with('categories','images','cities')
            ->when($this->byType, function($query){
                $query->whereHas('categories', function($q){
                    $q->where('name',$this->byType);
                });
            })
            ->when($this->byCity, function($query){
                $query->where('city',$this->byCity);
            })
            ->when($this->byPrice, function($query){
                if($this->byPrice === 1000000){
                    $query->whereBetween('price',[1000000,10000000]);
                }elseif($this->byPrice === 10000000){
                    $query->whereBetween('price',[10000000,5000000]);
                }elseif($this->byPrice === 50000000){
                    $query->whereBetween('price',[50000000,100000000]);
                }elseif($this->byPrice === 100000000){
                    $query->whereBetween('price',[100000000,500000000]);
                }elseif($this->byPrice === 500000000){
                    $query->whereBetween('price',[500000000,1000000000]);
                }elseif($this->byPrice === 1000000000){
                    $query->where('price','=>',1000000000);
                }else{
                    $query->where('price','=>',$this->byPrice);
                }
            })
            ->orderBy('created_at',$this->sortBy)->paginate(30);
            
        return view('livewire.all-properties',compact('properties','cities'));
        
    }

    public function resetVars(){
        $this->reset();
    }
}
