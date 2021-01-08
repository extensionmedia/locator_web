<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserProfileSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->delete();
        DB::table('user_profiles')->insert([
            [
                'user_profile'                  => 'Administrateur'
            ],
            [
                'user_profile'                  => 'Vendeur'
            ],
            [
                'user_profile'                  => 'Secrétaire'
            ]
        ]);
    }
}
