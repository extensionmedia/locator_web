<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarBrandSerie;
use App\Models\CarCarburant;
use App\Models\CarColor;
use App\Models\CarGearbox;
use App\Models\CarPuissance;
use App\Models\CarClass;

class CarController extends Controller{

    public function index(){
        return view('car.index')->with([
            'cars'  =>  Car::all()
        ]);
    }

    public function edit(Car $car){
        return view('car.edit')->with([
            'car'=>$car, 
            'car_brands' => CarBrand::all(),
            'car_brand_series' => CarBrandSerie::where('car_brand_id', $car->car_brand_id)->get(),
            'car_carburants' => CarCarburant::all(), 
            'car_classes' => CarClass::all(),
            'car_colors' => CarColor::all(),
            'car_gearboxes' => CarGearbox::all(),
            'car_puissances' => CarPuissance::all(),
            ]);
    }

    public static function getCars(){
        $cars = [
            [
                'matricule'         =>  '1254-A-44',
                'marque'            =>  'Honda',
                'serie'             =>  'Jazz',
                'color'             =>  'black',
                'carburant'         =>  'Essence',
                'image'             =>  'https://th.bing.com/th/id/OIP.plcGSxzm_GIlwgQCRK6hMAHaE8?w=219&h=180&c=7&o=5&pid=1.7',
                'status'            =>  1
            ],
            [
                'matricule'         =>  '115487-A-40',
                'marque'            =>  'Dacia',
                'serie'             =>  'Logan',
                'color'             =>  'red',
                'carburant'         =>  'Essence',
                'image'             =>  'https://th.bing.com/th/id/OIP.biMC08iyLIchH85TKhtsaQHaEK?w=327&h=184&c=7&o=5&pid=1.7',
                'status'            =>  0
            ],
            [
                'matricule'         =>  '1254-A-44',
                'marque'            =>  'Honda',
                'serie'             =>  'Jazz',
                'color'             =>  'black',
                'carburant'         =>  'Essence',
                'image'             =>  'https://th.bing.com/th/id/OIP.plcGSxzm_GIlwgQCRK6hMAHaE8?w=219&h=180&c=7&o=5&pid=1.7',
                'status'            =>  0
            ],
            [
                'matricule'         =>  '115487-A-40',
                'marque'            =>  'Dacia',
                'serie'             =>  'Logan',
                'color'             =>  'red',
                'carburant'         =>  'Essence',
                'image'             =>  'https://th.bing.com/th/id/OIP.biMC08iyLIchH85TKhtsaQHaEK?w=327&h=184&c=7&o=5&pid=1.7',
                'status'            =>  1
            ],
            [
                'matricule'         =>  '1254-A-44',
                'marque'            =>  'Peugot',
                'serie'             =>  '3008',
                'color'             =>  'blue',
                'carburant'         =>  'Diesel',
                'image'             =>  'https://th.bing.com/th/id/OIP.-wz7Z8b3GtllhGL6qoaUhAHaEu?w=245&h=180&c=7&o=5&pid=1.7',
                'status'            =>  0
            ],
            [
                'matricule'         =>  '115487-A-40',
                'marque'            =>  'Mercedes',
                'serie'             =>  '220C',
                'color'             =>  'white',
                'carburant'         =>  'Escence',
                'image'             =>  'https://th.bing.com/th/id/OIP.wiGLjnZOQxFr2eV4I0-mXAHaEd?w=310&h=186&c=7&o=5&pid=1.7',
                'status'            =>  1
            ],
            [
                'matricule'         =>  '1254-A-44',
                'marque'            =>  'Peugot',
                'serie'             =>  '3008',
                'color'             =>  'blue',
                'carburant'         =>  'Diesel',
                'image'             =>  'https://th.bing.com/th/id/OIP.-wz7Z8b3GtllhGL6qoaUhAHaEu?w=245&h=180&c=7&o=5&pid=1.7',
                'status'            =>  1
            ],
            [
                'matricule'         =>  '115487-A-40',
                'marque'            =>  'Mercedes',
                'serie'             =>  '220C',
                'color'             =>  'white',
                'carburant'         =>  'Escence',
                'image'             =>  'https://th.bing.com/th/id/OIP.wiGLjnZOQxFr2eV4I0-mXAHaEd?w=310&h=186&c=7&o=5&pid=1.7',
                'status'            =>  -1
            ],
            [
                'matricule'         =>  '1254-A-44',
                'marque'            =>  'Honda',
                'serie'             =>  'Jazz',
                'color'             =>  'black',
                'carburant'         =>  'Essence',
                'image'             =>  'https://th.bing.com/th/id/OIP.plcGSxzm_GIlwgQCRK6hMAHaE8?w=219&h=180&c=7&o=5&pid=1.7',
                'status'            =>  1
            ],
        ];
        return $cars;
    }

}
