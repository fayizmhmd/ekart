<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'price' => $this->faker->randomNumber(3),
            'category_id' => $this->faker->numberBetween(1,3),
            'status' => $this->faker->numberBetween(0,1),
            'is_favourite' => $this->faker->numberBetween(0,1),
        ];
    }
}
