<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CarColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_colors')->delete();
        DB::table('car_colors')->insert([
            ['car_color'   => 'Blanc'],
            ['car_color'   => 'Rouge'],
            ['car_color'   => 'Bleu'],
            ['car_color'   => 'Vert'],
            ['car_color'   => 'Noir'],
            ['car_color'   => 'Orange']
        ]);
    }
}
