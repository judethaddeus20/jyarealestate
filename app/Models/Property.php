<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Video;
use App\Models\Category;

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
    ];

    protected $hidden = [
        'user_id',
    ];
    
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function videos(){
        return $this->hasOne(Video::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    
    

}
