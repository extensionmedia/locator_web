<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ClientTypeSeeder::class,
            ClientStatusSeeder::class,
            ClientCategorySeeder::class,
            CarRentStatusSeeder::class,
            CarCarburantSeeder::class,
            CarClassSeeder::class,
            CarColorSeeder::class,
            CarGearboxSeeder::class,
            CarPuissanceSeeder::class,
            CarBrandSeeder::class,
            CarBrandSerieSeeder::class
        ]);
        \App\Models\Client::factory(65)->create();
        \App\Models\CarRent::factory(563)->create();
        \App\Models\Car::factory(13)->create();
    }
}
