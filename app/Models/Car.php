<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model{
    use HasFactory;

    public function brand(){
        return $this->belongsTo(CarBrand::class, 'car_brand_id');
    }

    public function brandSerie(){
        return $this->belongsTo(CarBrandSerie::class, 'car_brand_serie_id');
    }

    public function class(){
        return $this->belongsTo(CarClass::class, 'car_class_id');
    }

    public function carburant(){
        return $this->belongsTo(CarCarburant::class, 'car_carburant_id');
    }

    public function gearbox(){
        return $this->belongsTo(CarGearbox::class, 'car_gearbox_id');
    }
    public function puissance(){
        return $this->belongsTo(CarPuissance::class, 'car_puissance_id');
    }
    public function color(){
        return $this->belongsTo(CarColor::class, 'car_color_id');
    }

    public function rents(){
        return $this->hasMany(CarRent::class);
    }

}
