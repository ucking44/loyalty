<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(LGATableSeeder::class);
        $this->call(WardTableSeeder::class);
        $this->call(CitizenTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
