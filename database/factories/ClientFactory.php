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
    public function definition(){
        $images = [
            'http://midone-vue.left4code.com/img/profile-14.04e928f6.jpg',
            'http://midone-vue.left4code.com/img/profile-11.b5ab9aac.jpg',
            'http://midone-vue.left4code.com/img/profile-6.29f8ba97.jpg',
            'http://midone-vue.left4code.com/img/profile-13.d46ecb73.jpg',
            'http://midone-vue.left4code.com/img/profile-8.550b132f.jpg'
        ];
        return [
            'client_name'                       =>  $this->faker->name,
            'user_id'                           =>  1,
            'client_category_id'                =>  $this->faker->numberBetween($min = 1, $max = 4),
            'client_type_id'                    =>  $this->faker->numberBetween($min = 1, $max = 3),
            'client_status_id'                  =>  $this->faker->numberBetween($min = 1, $max = 3),
            'client_telephone'                  =>  $this->faker->e164PhoneNumber,
            'client_city'                       =>  $this->faker->city,
            'client_adresse'                    =>  $this->faker->address,
            'client_cin'                        =>  '',
            'client_cin_date_expiration'        =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_passport'                   =>  '',
            'client_passport_date_expiration'   =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_photo_profile'              =>  $images[$this->faker->numberBetween($min = 0, $max = 4)],
            'client_permis'                     =>  '',
            'client_permis_date_expiration'     =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'client_total_rent'                 =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'client_total_accompte'             =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'created_at'                        =>  now(),
            'updated_at'                        =>  now()
        ];
    }
}
