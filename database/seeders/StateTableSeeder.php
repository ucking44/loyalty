<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'state_name' => 'Lagos',
        ]);

        State::create([
            'state_name' => 'Abia',
        ]);

        State::create([
            'state_name' => 'Ogun',
        ]);

        State::create([
            'state_name' => 'Enugu',
        ]);

        State::create([
            'state_name' => 'Imo',
        ]);

        // $faker = \Faker\Factory::create();

        // for ($i = 0; $i < 10; $i++) {
        //     State::create([
        //         'name' => $faker->name,
        //     ]);
        // }

        //State::factory()->count(37)->create();
        
        //factory(State::class, 10)->create();
    }
}
