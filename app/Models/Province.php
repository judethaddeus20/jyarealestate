<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Municipality;
use App\Models\Property;

class Province extends Model
{
    use HasFactory;
    
    public function cities(){
        return $this->hasMany(City::class);
    }

    public function municipalities(){
        return $this->hasMany(Municipality::class);
    }

    public function properties(){
        return $this->hasManyThrough(Property::class, City::class);
    }
    
}
