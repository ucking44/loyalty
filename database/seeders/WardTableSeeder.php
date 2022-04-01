<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Seeder;

class WardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ward::create([
            'ward_name' => 'Ward A',
            'lga_id' => '1',
        ]);

        Ward::create([
            'ward_name' => 'Ward B',
            'lga_id' => '2',
        ]);

        Ward::create([
            'ward_name' => 'Ward C',
            'lga_id' => '3',
        ]);

        Ward::create([
            'ward_name' => 'Ward D',
            'lga_id' => '4',
        ]);

        Ward::create([
            'ward_name' => 'Ward E',
            'lga_id' => '5',
        ]);

    }
}
