<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ClientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_statuses')->delete();
        DB::table('client_statuses')->insert([
            [
                'client_status'         => 'Disponible',
                'is_default'            =>  1,
                'client_status_icon'    =>  '<span class="py-1 px-2 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border">[]</span>'           
            ],
            [
                'client_status'   => 'Liste Noire',
                'is_default'    =>  0,
                'client_status_icon'    =>  '<span class="py-1 px-2 text-xs bg-pink-500 text-pink-100 border-pink-400 text-center rounded-xl border">[]</span>'                
            ],
            [
                'client_status'         => 'Autres',
                'is_default'            =>  0,
                'client_status_icon'    =>  '<span class="py-1 px-2 text-xs bg-gray-200 text-gray-700 border-gray-400 text-center rounded-xl border">[]</span>'        
            ]
        ]);
    }
}
