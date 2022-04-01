<?php

namespace Database\Seeders;

use App\Models\LGA;
use Illuminate\Database\Seeder;

class LGATableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = \Faker\Factory::create();

        LGA::create([
            'lga_name' => 'IBEJU LEKKI',
            'state_id' => '1',
        ]);

        LGA::create([
            'lga_name' => 'COSTAL',
            'state_id' => '2',
        ]);

        LGA::create([
            'lga_name' => 'OGUNFAYO',
            'state_id' => '3',
        ]);

        LGA::create([
            'lga_name' => 'BOGIJE',
            'state_id' => '4',
        ]);

        LGA::create([
            'lga_name' => 'Surulere',
            'state_id' => '5',
        ]);

        //LGA::factory()->count(37)->create();

        // LGA::create([
        //     'state_id' => 1,
        //     'lga_name' => 'Mushin',
        // ]);

        // for ($i = 0; $i < 20; $i++) {
        //     LGA::create([
        //         'lga_name' => $faker->name,
        //         'state_id' => $faker->unique()->numberBetween($min = 1, $max = 10000),
        //     ]);
        // }
    }
}
