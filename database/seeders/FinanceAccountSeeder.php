<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FinanceAccountSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('finance_accounts')->delete();
        DB::table('finance_accounts')->insert([
            [
                'finance_account_name'              => 'Caisse',
                'finance_account_solde_initial'     =>  0,
                'finance_account_solde_minimum'     =>  0,
                'finance_account_is_active'         =>  1,
                'finance_account_is_default'        =>  1
            ],
            [
                'finance_account_name'              => 'Banque Populaire',
                'finance_account_solde_initial'     =>  45210,
                'finance_account_solde_minimum'     =>  0,
                'finance_account_is_active'         =>  1,
                'finance_account_is_default'        =>  0
            ],
            [
                'finance_account_name'              => 'Caisse Secoure',
                'finance_account_solde_initial'     =>  5000,
                'finance_account_solde_minimum'     =>  0,
                'finance_account_is_active'         =>  1,
                'finance_account_is_default'        =>  0
            ]
        ]);
    }
}
