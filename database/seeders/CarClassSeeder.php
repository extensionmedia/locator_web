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
                'car_class'   => 'Familly',
                'is_default'    =>  1
            ],
            [
                'car_class'   => 'Tout Terrain',
                'is_default'    =>  0
            ],
            [
                'car_class'   => 'Camionette',
                'is_default'    =>  0
            ]
        ]);
    }
}
