<?php

namespace Database\Factories;

use App\Models\FinanceAccountMouvement;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinanceAccountMouvementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FinanceAccountMouvement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'finance_account_id'                        =>  $this->faker->numberBetween($min = 1, $max = 3),
            'finance_account_mouvement_category_id'     =>  $this->faker->numberBetween($min = 1, $max = 2),
            'payment_type_id'                           =>  $this->faker->numberBetween($min = 1, $max = 4),
            'user_id'                                   =>  1,
            'description'                               =>  $this->faker->text($maxNbChars = 100),
            'account_mouvement_date'                    =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'source'                                    =>  $this->faker->randomElement( $array = ['Location', 'Autres'] ),
            'source_id'                                 =>  $this->faker->numberBetween($min = 1, $max = 163),
            'account_mouvement_in'                      =>  $this->faker->numberBetween($min = 250, $max = 50000),
            'account_mouvement_out'                     =>  0,
            'created_at'                                =>  now(),
            'updated_at'                                =>  now()
        ];
    }
}
