<?php

namespace Database\Seeders;

use App\Models\Salespeople;
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
        // \App\Models\User::factory(10)->create();
        $this->call(ResTypeSeeder::class);
        $this->call(SalespeopleSeeder::class);
        // \App\Models\Salespeople::factory(10)->create();
    }
}
