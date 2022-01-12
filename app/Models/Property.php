<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Video;
use App\Models\Category;
use App\Models\City;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Amenity;
use App\Models\Area;
use App\Models\Room;


class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = [
        'name',
        'price',
        'location',
        'latitude',
        'longitude',
        'description',
        'developer',
        'rooms',
        'province',
        'city',
        'municipality',
        'url'
    ];

    protected $hidden = [
        'user_id',
    ];
    
    public function images(){
        return $this->hasMany(Image::class);
    }
    
    public function videos(){
        return $this->hasMany(Video::class);
    }
    public function hasRooms(){
        return $this->hasMany(Room::class);
    }
    public function amenities(){
        return $this->hasMany(Amenity::class);
    }

    public function areas(){
        return $this->hasMany(Area::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    
    public function cities(){
        return $this->belongsToMany(City::class);
    }
    public function municipalities(){
        return $this->belongsToMany(Municipality::class);
    }


}
