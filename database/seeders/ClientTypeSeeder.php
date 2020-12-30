<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_types')->delete();
        DB::table('client_types')->insert([
            [
                'client_type'   => 'Particulier',
                'is_default'    =>  1               
            ],
            [
                'client_type'   => 'Société',
                'is_default'    =>  0                
            ],
            [
                'client_type'   => 'Autres',
                'is_default'    =>  0                
            ]
        ]);
    }
}
