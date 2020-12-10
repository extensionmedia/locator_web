<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CarPuissanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_puissances')->delete();
        DB::table('car_puissances')->insert([
            [
                'car_puissance'   => '5 Cv',
                'is_default'    =>  1
            ],
            [
                'car_puissance'   => '7 Cv',
                'is_default'    =>  0
            ],
            [
                'car_puissance'   => '8 Cv',
                'is_default'    =>  0
            ]
        ]);
    }
}
