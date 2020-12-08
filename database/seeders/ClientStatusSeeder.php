<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_status')->insert([
            [
                'client_status'   => 'Disponible',
                'is_default'    =>  1               
            ],
            [
                'client_status'   => 'Liste ',
                'is_default'    =>  0                
            ],
            [
                'client_status'   => 'Autres',
                'is_default'    =>  0                
            ]
        ]);
    }
}
