<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class DogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'breed' => $this->faker->name('male')
        ];
    }
}
