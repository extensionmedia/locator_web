<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CarRentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_rent_status')->delete();
        DB::table('car_rent_status')->insert([
            [
                'car_rent_status'   => 'Reservation',
                'is_default'    =>  1
            ],
            [
                'car_rent_status'   => 'Location',
                'is_default'    =>  0
            ],
            [
                'car_rent_status'   => 'Annulation',
                'is_default'    =>  0
            ],
            [
                'car_rent_status'   => 'Cloturer',
                'is_default'    =>  0
            ]
        ]);
    }
}
