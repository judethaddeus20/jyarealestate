<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = ['name','property_id',];

    public function properties(){
        return $this->hasOne(Property::class);
    }
}
