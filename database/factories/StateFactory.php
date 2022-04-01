<?php

namespace Database\Factories;

use App\Models\State;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state_name' => $this->faker->name(),
        ];

        // $factory->define(State::class, function (Faker $faker) {
        //     return [
        //         'name' => $faker->name,
        //     ];
        // });
    }
}
