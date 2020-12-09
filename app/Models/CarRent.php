<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRent extends Model{
    use HasFactory;

    public function status(){
        return $this->hasOne(CarRentStatus::class, 'id','car_rent_status_id');
    }
}
