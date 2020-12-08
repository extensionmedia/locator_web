<?php

namespace Database\Factories;

use App\Models\Clients;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_name'                       =>  $this->faker->client_name,
            'client_telephone'                  =>  $this->faker->client_telephone,
            'client_city'                       =>  '',
            'client_cin'                        =>  '',
            'client_cin_date_expiration'        =>  '',
            'client_passport'                   =>  '',
            'client_passport_date_expiration'   =>  '',
            'client_photo_profile'              =>  '',
            'client_permis'                     =>  '',
            'client_permis_date_expiration'     =>  '',
            'client_total_rent'                 =>  0,
            'client_total_accompte'             =>  0,
            'created_at'                        =>  now(),
            'updated_at'                        =>  now()
        ];
    }
}
