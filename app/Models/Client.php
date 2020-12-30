<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model{
    use HasFactory;

    public function rents(){
        return $this->hasMany(CarRent::class, 'client_id', 'id');
    }

    public function category(){
        return $this->belongsTo(ClientCategory::class, 'client_category_id', 'id');
    }

    public function type(){
        return $this->belongsTo(ClientType::class, 'client_type_id', 'id');
    }

    public function status(){
        return $this->belongsTo(ClientStatus::class, 'client_status_id', 'id');
    }
}
