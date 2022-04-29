<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Driver;
use Database\Factories\CarFactory;
use Database\Factories\DriverFactory;
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
        Car::factory()->count(10)->create();
        Driver::factory()->count(10)->create();
    }
}
