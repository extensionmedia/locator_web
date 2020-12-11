<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model{
    use HasFactory;

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function brandSeries(){
        return $this->hasMany(CarBrandSerie::class);
    }
}
