<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PaymentTypeSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('payment_types')->delete();
        DB::table('payment_types')->insert([
            [
                'payment_type'                  => 'Espèces',
                'payment_type_is_default'       =>  1
            ],
            [
                'payment_type'                  => 'Virement Bancaire',
                'payment_type_is_default'       =>  0
            ],
            [
                'payment_type'                  => 'Chèque',
                'payment_type_is_default'       =>  0
            ],
            [
                'payment_type'                  => 'Carte Crédit',
                'payment_type_is_default'       =>  0
            ],
            [
                'payment_type'                  => 'Autres Paiement',
                'payment_type_is_default'       =>  0
            ]
        ]);
    }
}
