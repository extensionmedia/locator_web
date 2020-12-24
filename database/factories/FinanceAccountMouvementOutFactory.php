<?php

namespace Database\Factories;

use App\Models\FinanceAccountMouvementOut;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinanceAccountMouvementOutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FinanceAccountMouvementOut::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'finance_account_id'                        =>  $this->faker->numberBetween($min = 1, $max = 3),
            'finance_account_mouvement_category_id'     =>  $this->faker->numberBetween($min = 3, $max = 9),
            'payment_type_id'                           =>  $this->faker->numberBetween($min = 1, $max = 4),
            'user_id'                                   =>  1,
            'description'                               =>  $this->faker->text($maxNbChars = 100),
            'account_mouvement_date'                    =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'source'                                    =>  $this->faker->randomElement( $array = ['Location', 'Depense', 'Autres'] ),
            'source_id'                                 =>  $this->faker->numberBetween($min = 1, $max = 163),
            'account_mouvement_out'                     =>  $this->faker->numberBetween($min = 250, $max = 50000),
            'account_mouvement_in'                      =>  0,
            'created_at'                                =>  now(),
            'updated_at'                                =>  now()
        ];
    }
}
