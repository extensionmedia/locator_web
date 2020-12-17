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
        $in = $this->faker->numberBetween($min = 0, $max = 1);
        if( $in == '1' ){
            $in = $this->faker->numberBetween($min = 250, $max = 100000);
            $out = 0;
        }else{
            $in = 0;
            $out = $this->faker->numberBetween($min = 50, $max = 10000);
        }


        return [
            'finance_account_id'                        =>  $this->faker->numberBetween($min = 1, $max = 3),
            'finance_account_mouvement_category_id'     =>  $in=='1'? $this->faker->numberBetween($min = 1, $max = 2): $this->faker->numberBetween($min = 3, $max = 8),
            'user_id'                                   =>  1,
            'description'                               =>  $this->faker->text($maxNbChars = 100),
            'account_mouvement_date'                    =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'source'                                    =>  $this->faker->randomElement( $array = ['Location', 'Depense', 'Autres'] ),
            'source_id'                                 =>  $this->faker->numberBetween($min = 1, $max = 563),
            'account_mouvement_in'                      =>  $in,
            'account_mouvement_out'                     =>  $out,
            'created_at'                                =>  now(),
            'updated_at'                                =>  now()
        ];
    }
}
