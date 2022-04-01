<?php

namespace Database\Seeders;

use App\Models\Citizen;
use Illuminate\Database\Seeder;

class CitizenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citizen::create([
            'user_id'      => '1',
            'citizen_name' => 'Fumilola Ayomide',
            'gender'       => 'female',
            'address'      => '21 Oladimeji street',
            'phone'        => '07086748329',
            'ward_id'      => '1',
        ]);

        Citizen::create([
            'user_id'      => '2',
            'citizen_name' => 'Joke Paul',
            'gender'       => 'female',
            'address'      => '11 Ola street',
            'phone'        => '07086741111',
            'ward_id'      => '2',
        ]);

        Citizen::create([
            'user_id'      => '3',
            'citizen_name' => 'L Messi',
            'gender'       => 'male',
            'address'      => '72 Dimeji street',
            'phone'        => '07086740000',
            'ward_id'      => '3',
        ]);

        Citizen::create([
            'user_id'      => '4',
            'citizen_name' => 'R Kelly',
            'gender'       => 'male',
            'address'      => '100 Itire road',
            'phone'        => '07086748888',
            'ward_id' => '4',
        ]);

        Citizen::create([
            'user_id'      => '5',
            'citizen_name' => 'C Ronaldo',
            'gender'       => 'male',
            'address'      => '199 Surulere road',
            'phone'        => '07086743333',
            'ward_id' => '5',
        ]);

    }
}
