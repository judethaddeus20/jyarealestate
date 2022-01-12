<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
use App\Models\Province;
use App\Models\Municipality;
use App\Models\City;
use DB;
class City extends Model
{
    use HasFactory;
    public function provinces()
    {
        return $this->hasManyThrough('App\Models\Province', 'App\Models\City');
    }
}
