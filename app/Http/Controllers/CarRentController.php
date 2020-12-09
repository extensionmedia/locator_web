<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRent;

class CarRentController extends Controller
{
    public function index(){
        $carRents = CarRent::orderBy('car_rent_end_date')->paginate(50);
        return view('rent.index', ['rents'=>$carRents]);
    }
}
