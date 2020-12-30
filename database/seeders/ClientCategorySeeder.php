<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClientCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_categories')->delete();
        DB::table('client_categories')->insert([
            [
                'client_category'   => 'Passager',
                'is_default'    =>  1
            ],
            [
                'client_category'   => 'Amis',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Famille',
                'is_default'    =>  0
            ],
            [
                'client_category'   => 'Divers',
                'is_default'    =>  0
            ]
        ]);
    }
}
