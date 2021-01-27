<?php

namespace Database\Factories;

use App\Models\CarRent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CarRentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarRent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        $start = $this->faker->date($format = 'Y-m-d', $max = 'now');
        $end = $this->faker->date($format = 'Y-m-d', $max = $start);

        $date = Carbon::parse($start);
        
        $diff = $date->diffInDays($end);
        return [
            'user_id'                           =>  1,
            'car_id'                            =>  $this->faker->numberBetween($min = 1, $max = 5),
            'client_id'                         =>  $this->faker->numberBetween($min = 1, $max = 65),
            'client_id_2'                       =>  $this->faker->numberBetween($min = 1, $max = 65),
            'car_rent_status_id'                =>  $this->faker->numberBetween($min = 1, $max = 5),
            'car_rent_status_date'              =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'car_rent_start_date'               =>  $start,
            'car_rent_end_date'                 =>  $end,
            'car_rent_days'                     =>  $diff,
            'car_rent_total'                    =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'car_rent_discount'                 =>  $this->faker->numberBetween($min = 0, $max = 500),
            'car_rent_days'                     =>  $this->faker->numberBetween($min = 2, $max = 90),
            'car_kilometrage_start'             =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'car_kilometrage_end'               =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'car_rent_tank'                     =>  1,
            'created_at'                        =>  now(),
            'updated_at'                        =>  now()
        ];
    }
}
