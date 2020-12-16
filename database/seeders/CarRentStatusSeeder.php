<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CarRentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_rent_statuses')->delete();
        DB::table('car_rent_statuses')->insert([
            [
                'car_rent_status'       => 'Réservation',
                'is_default'            =>  1,
                'car_rent_status_icon'  =>  '<span class="py-1 px-2 text-xs bg-orange-200 text-orange-700 border-orange-400 text-center rounded-xl border">[]</span>'
            ],
            [
                'car_rent_status'   => 'Location',
                'is_default'    =>  0,
                'car_rent_status_icon'  =>  '<span class="py-1 px-2 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border">[]</span>'
            ],
            [
                'car_rent_status'   => 'Sous-Location',
                'is_default'    =>  0,
                'car_rent_status_icon'  =>  '<span class="py-1 px-2 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border">[]</span>'
            ],
            [
                'car_rent_status'   => 'Annulation',
                'is_default'    =>  0,
                'car_rent_status_icon'  =>  '<span class="py-1 px-2 text-xs bg-pink-200 text-pink-700 border-pink-400 text-center rounded-xl border">[]</span>'
            ],
            [
                'car_rent_status'   => 'Cloturer',
                'is_default'    =>  0,
                'car_rent_status_icon'  =>  '<span class="py-1 px-2 text-xs bg-gray-200 text-gray-700 border-gray-400 text-center rounded-xl border">[]</span>'
            ]
        ]);
    }
}
