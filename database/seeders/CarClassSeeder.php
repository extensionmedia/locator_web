<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CarClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_classes')->delete();
        DB::table('car_classes')->insert([
            [
                'car_class'   => 'ECONOMIQUE',
                'is_default'    =>  1
            ],
            [
                'car_class'   => 'SPORT',
                'is_default'    =>  0
            ],
            [
                'car_class'   => 'MINIBUS',
                'is_default'    =>  0
            ],
            [
                'car_class'   => 'LUXURY',
                'is_default'    =>  1
            ],
            [
                'car_class'   => 'PICKUP',
                'is_default'    =>  0
            ],
            [
                'car_class'   => 'TOUT TERRAIN',
                'is_default'    =>  0
            ]
        ]);
    }
}
