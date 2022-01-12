<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'property_name',
        'agent_name',
        'client_name',
        'branch',
        'developer',
        'category',
        'number_of_unit',
        'date_reserved',
        'user_id'
    ];

    protected $hidden = [
        'user_id',
    ];
    
    public function users(){
        return $this->hasOne(User::class);
    }
    protected $casts = [
        'date_reserved'  => 'datetime:Y-m-d\TH:i'
   ];
}
