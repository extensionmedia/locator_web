<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_brands')->delete();
        DB::table('car_brands')->insert([
            [
                'id'            =>  5,
                'car_brand'   => 'AUDI'
            ],
            [
                'id'            =>  6,
                'car_brand'   => 'BMW'
            ],
            [
                'id'            =>  7,
                'car_brand'   => 'CHEVROLET'
            ],
            [
                'id'            =>  8,
                'car_brand'   => 'CITROEN'
            ],
            [
                'id'            =>  9,
                'car_brand'   => 'DACIA'
            ],
            [
                'id'            =>  10,
                'car_brand'   => 'DODGE'
            ],
            [
                'id'            =>  11,
                'car_brand'   => 'FERRARI'
            ],
            [
                'id'            =>  12,
                'car_brand'   => 'FIAT'
            ],
            [
                'id'            =>  13,
                'car_brand'   => 'FORD'
            ],
            [
                'id'            =>  14,
                'car_brand'   => 'HONDA'
            ],
            [
                'id'            =>  15,
                'car_brand'   => 'HYUNDAI'
            ],
            [
                'id'            =>  16,
                'car_brand'   => 'INFINITI'
            ],
            [
                'id'            =>  17,
                'car_brand'   => 'ISUZU'
            ],
            [
                'id'            =>  18,
                'car_brand'   => 'IVECO'
            ],
            [
                'id'            =>  19,
                'car_brand'   => 'JEEP'
            ],
            [
                'id'            =>  20,
                'car_brand'   => 'KIA'
            ],
            [
                'id'            =>  21,
                'car_brand'   => 'LAND ROVER'
            ],
            [
                'id'            =>  22,
                'car_brand'   => 'MAZDA'
            ],
            [
                'id'            =>  23,
                'car_brand'   => 'MERCEDES-BENZ'
            ],
            [
                'id'            =>  24,
                'car_brand'   => 'MINI'
            ],
            [
                'id'            =>  25,
                'car_brand'   => 'MITSUBISHI'
            ],
            [
                'id'            =>  26,
                'car_brand'   => 'NISSAN'
            ],
            [
                'id'            =>  27,
                'car_brand'   => 'OPEL'
            ],
            [
                'id'            =>  28,
                'car_brand'   => 'SEAT'
            ],
            [
                'id'            =>  29,
                'car_brand'   => 'SKODA'
            ],
            [
                'id'            =>  30,
                'car_brand'   => 'RENAULT'
            ],
            [
                'id'            =>  31,
                'car_brand'   => 'VOLKSWAGEN'
            ],
            [
                'id'            =>  32,
                'car_brand'   => 'PEUGEOT'
            ],
            [
                'id'            =>  33,
                'car_brand'   => 'TOYOTA'
            ]
        ]);
    }
}
