<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CarGearboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_gearboxes')->delete();
        DB::table('car_gearboxes')->insert([
            [
                'car_gearbox'   => 'Manuelle',
                'is_default'    =>  1
            ],
            [
                'car_gearbox'   => 'Automatique',
                'is_default'    =>  0
            ],
            [
                'car_gearbox'   => 'Tiptronic',
                'is_default'    =>  0
            ]
        ]);
    }
}
