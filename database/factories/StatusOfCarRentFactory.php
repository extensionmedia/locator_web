<?php

namespace Database\Factories;

use App\Models\StatusOfCarRent;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusOfCarRentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StatusOfCarRent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        return [
            'user_id'               => 1,
            'car_rent_id'           => $this->faker->numberBetween($min = 1, $max = 163),
            'car_rent_status_id'    => $this->faker->numberBetween($min = 1, $max = 5),
            'rent_status_date'      => now(),
            'created_at'            => now(),
            'updated_at'            => now(),
        ];
    }
}
