<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRent extends Model{
    use HasFactory;

    public function car_rent_status(){
        return $this->belongsTo(CarRentStatus::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
