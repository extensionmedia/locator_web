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

    public function secondClient(){
        return $this->belongsTo(Client::class, 'client_id_2');
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function mouvements(){
        return $this->hasMany(FinanceAccountMouvement::class, 'source_id');
    }

    public function paiements(){
        return $this->mouvements()->where('source','=', 'Location')->where('account_mouvement_in','>', 0);
    }

    public function depenses(){
        return $this->mouvements()->where('source','=', 'Location')->where('account_mouvement_out','>', 0);
    }
    
    public function statuses(){
        return $this->hasMany(StatusOfCarRent::class, 'car_rent_id');
    }
    
}
