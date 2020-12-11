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
            ['car_color'   => 'Blanc', 'car_color_code' => 'rgba(255,255,255,1)'],
            ['car_color'   => 'BLEU', 'car_color_code' => 'rgba(0,116,217,1)'],
            ['car_color'   => 'JAUNE', 'car_color_code' => 'rgba(255,220,0,1)'],
            ['car_color'   => 'GRIS', 'car_color_code' => 'rgba(170,170,170,1)'],
            ['car_color'   => 'MARRON', 'car_color_code' => 'rgba(133,20,75,1)'],
            ['car_color'   => 'NOIR', 'car_color_code' => 'rgba(17,17,17,1)'],
            ['car_color'   => 'ORANGE', 'car_color_code' => 'rgba(255,133,27,1)'],
            ['car_color'   => 'ROUGE', 'car_color_code' => 'rgba(255,65,54,1)'],
            ['car_color'   => 'ROSE', 'car_color_code' => 'rgba(240,18,190,1)'],
            ['car_color'   => 'VERT', 'car_color_code' => 'rgba(46,204,64,1)'],
            ['car_color'   => 'VIOLET', 'car_color_code' => 'rgba(177,13,201,1)']
        ]);
    }
}
