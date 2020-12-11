<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photos = [
            'https://th.bing.com/th/id/OIP.plcGSxzm_GIlwgQCRK6hMAHaE8?w=219&h=180&c=7&o=5&pid=1.7',
            'https://th.bing.com/th/id/OIP.biMC08iyLIchH85TKhtsaQHaEK?w=327&h=184&c=7&o=5&pid=1.7',
            'https://th.bing.com/th/id/OIP.-wz7Z8b3GtllhGL6qoaUhAHaEu?w=245&h=180&c=7&o=5&pid=1.7',
            'https://th.bing.com/th/id/OIP.wiGLjnZOQxFr2eV4I0-mXAHaEd?w=310&h=186&c=7&o=5&pid=1.7',
        ];

        return [
            'car_brand_id'          =>  $this->faker->numberBetween($min = 5, $max = 33),
            'car_brand_serie_id'    =>  $this->faker->numberBetween($min = 8, $max = 106),
            'car_carburant_id'      =>  $this->faker->numberBetween($min = 1, $max = 4),
            'car_class_id'          =>  $this->faker->numberBetween($min = 1, $max = 6),
            'car_color_id'          =>  $this->faker->numberBetween($min = 1, $max = 11),
            'car_gearbox_id'        =>  $this->faker->numberBetween($min = 1, $max = 3),
            'car_puissance_id'      =>  $this->faker->numberBetween($min = 1, $max = 4),
            'car_start_date'        =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'car_prix_achat'        =>  $this->faker->numberBetween($min = 125000, $max = 700000),
            'car_prix_vente'        =>  $this->faker->numberBetween($min = 0, $max = 700000),
            'car_matricule'         =>  $this->faker->numberBetween($min = 145, $max = 123456) . '-' . $this->faker->randomLetter() . '-' . $this->faker->numberBetween($min = 1, $max = 99),
            'car_matricule_w'       =>  $this->faker->randomLetter() . $this->faker->numberBetween($min = 1000, $max = 45000),
            'car_photo'             =>  $photos[$this->faker->numberBetween($min = 0, $max = 3)],
            'car_gps'               =>  $this->faker->numberBetween($min = 1000, $max = 45000),
            'car_numero_chassis'    =>  $this->faker->numberBetween($min = 1025400, $max = 450554800),
            'created_at'            =>  now(),
            'updated_at'            =>  now()
        ];
    }
}
