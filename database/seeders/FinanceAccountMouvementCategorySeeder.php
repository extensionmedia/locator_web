<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class FinanceAccountMouvementCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('finance_account_mouvement_categories')->delete();
        DB::table('finance_account_mouvement_categories')->insert([
            [
                'finance_account_mouvement_category'    => 'Location',
                'is_in'                                 =>  1,
                'is_default'                            =>  1
            ],
            [
                'finance_account_mouvement_category'    => 'Alimentation Caisse',
                'is_in'                                 =>  1,
                'is_default'                            =>  0
            ],
            [
                'finance_account_mouvement_category'    => 'Avoir Location',
                'is_in'                                 =>  0,
                'is_default'                            =>  0
            ],
            [
                'finance_account_mouvement_category'    => 'Reparation',
                'is_in'                                 =>  0,
                'is_default'                            =>  1
            ],
            [
                'finance_account_mouvement_category'    => 'Assurance',
                'is_in'                                 =>  0,
                'is_default'                            =>  0
            ],
            [
                'finance_account_mouvement_category'    => 'Loyer',
                'is_in'                                 =>  0,
                'is_default'                            =>  0
            ],
            [
                'finance_account_mouvement_category'    => 'Salaire',
                'is_in'                                 =>  0,
                'is_default'                            =>  0
            ],
            [
                'finance_account_mouvement_category'    => 'Credit',
                'is_in'                                 =>  0,
                'is_default'                            =>  0
            ],
            [
                'finance_account_mouvement_category'    => 'Autres',
                'is_in'                                 =>  0,
                'is_default'                            =>  0
            ],
        ]);
    }
}
