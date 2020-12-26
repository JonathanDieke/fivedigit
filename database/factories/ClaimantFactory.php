<?php

namespace Database\Factories;

use App\Models\claimant;
use Illuminate\Database\Eloquent\Factories\Factory;

class claimantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = claimant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'lname' => $this->faker->lastName,
            'birthday' => $this->faker-> dateTimeBetween($startDate = '-30 year', $endDate = 'now', $timezone = null),
        ];
    }
}
