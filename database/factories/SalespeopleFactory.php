<?php

namespace Database\Factories;

use App\Models\Salespeople;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
class SalespeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salespeople::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account' => $this->faker->userName(),
            'password' => Hash::make('password'),
            'last_logined' => "2021-02-30",
        ];
    }
}
