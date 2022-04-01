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

    }
}
