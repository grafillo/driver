<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'phone',


    ];

    public function car(){

        return $this->hasOne(Car::class, 'driver_id', 'id');

    }
}
