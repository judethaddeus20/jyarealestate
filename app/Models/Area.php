<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    public function properties(){
        return $this->hasOne(Property::class);
    }
}
