<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller{

    public function index(){
        return view('car.index')->with([
            'cars'  =>  CarController::getCars()
        ]);
    }

    public function edit($car){
        return view('car.edit')->with(
            [
                'car'   =>  CarController::getCars()[0]
            ]
            );
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
