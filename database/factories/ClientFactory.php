<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_name'                       =>  $this->faker->name,
            'user_id'                           =>  1,
            'client_category_id'                =>  1,
            'client_type_id'                    =>  1,
            'client_status_id'                  =>  1,
            'client_telephone'                  =>  $this->faker->e164PhoneNumber,
            'client_city'                       =>  $this->faker->city,
            'client_cin'                        =>  '',
            'client_cin_date_expiration'        =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_passport'                   =>  '',
            'client_passport_date_expiration'   =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_photo_profile'              =>  $this->faker->imageUrl($width = 640, $height = 480, 'cats'),
            'client_permis'                     =>  '',
            'client_permis_date_expiration'     =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_total_rent'                 =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'client_total_accompte'             =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'created_at'                        =>  now(),
            'updated_at'                        =>  now()
        ];
    }
}
