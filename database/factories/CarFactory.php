<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private function car(){
        $array = ['Mercedes','Opel','BMW','KIA'];
        return $array[rand(0, 3)];
    }


    public function definition()
    {
        return [
            'car'=>$this->car(),
            'number'=>$this->faker->ean8,


        ];
    }
}
