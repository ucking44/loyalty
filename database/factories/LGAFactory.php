<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LGAFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'lga_name' => $this->faker->name(),
            // 'state_id' => $this->faker->unique()->numberBetween($min = 1, $max = 10000),
        ];
    }
}
