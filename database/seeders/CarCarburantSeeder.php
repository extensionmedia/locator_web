<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CarCarburantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_carburants')->delete();
        DB::table('car_carburants')->insert([
            [
                'car_carburant'   => 'Essence',
                'is_default'    =>  1
            ],
            [
                'car_carburant'   => 'Diesel',
                'is_default'    =>  0
            ],
            [
                'car_carburant'   => 'Electrique',
                'is_default'    =>  0
            ],
            [
                'car_carburant'   => 'Hybride',
                'is_default'    =>  0
            ]
        ]);
    }
}
