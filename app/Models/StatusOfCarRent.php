<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOfCarRent extends Model{
    use HasFactory;

    public function carRentStatus(){
        return $this->belongsTo(CarRentStatus::class, 'car_rent_status_id');
    }

}
