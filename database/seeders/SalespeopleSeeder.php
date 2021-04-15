<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalespeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Salespeople::factory(10)->create();
    }
}
