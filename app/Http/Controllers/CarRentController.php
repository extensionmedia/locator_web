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

    public function edit(CarRent $rent){
        return view('rent.edit')->with(['rent'=> $rent]);
    }

    public static function get_by_year_month(){

        $rents = [
            1   =>   [
                        0   =>  '2021-01-01', 
                        1   =>  '2021-01-08'
            ],
            2   =>   [
                        0   =>  '2021-01-03', 
                        1   =>  '2021-01-12'
            ],
            3   =>   [
                        0   =>  '2021-01-28', 
                        1   =>  '2021-02-31'
            ],
            4   =>   [
                        0   =>  '2021-01-19', 
                        1   =>  '2021-01-27'
            ],
            5   =>   [
                        0   =>  '2021-01-02', 
                        1   =>  '2021-01-25'
            ]
        ];


        return $rents;

    }
}
