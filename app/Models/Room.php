<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    public function properties(){
        return $this->hasOne(Property::class);
    }
}
