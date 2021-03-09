<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRent;
use PDF;

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
                        0   =>  '2021-02-01', 
                        1   =>  '2021-02-08'
            ],
            2   =>   [
                        0   =>  '2021-02-03', 
                        1   =>  '2021-02-12'
            ],
            3   =>   [
                        0   =>  '2021-02-24', 
                        1   =>  '2021-02-28'
            ],
            4   =>   [
                        0   =>  '2021-02-19', 
                        1   =>  '2021-02-27'
            ],
            5   =>   [
                        0   =>  '2021-02-02', 
                        1   =>  '2021-02-25'
            ]
        ];


        return $rents;

    }

    public function create_contrat(){
        $data = ['data'=>'test', 'is_printed'=>true];
        $pdf = PDF::loadView('printed.contrat.index', $data);
        return $pdf->download('contrat.pdf');

    }

    public function show_contrat(){
        $data = 'test';

        return view('printed.contrat.index', ['data'=>$data, 'is_printed'=>false]);
    }
}
