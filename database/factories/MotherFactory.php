<?php

namespace Database\Factories;

use App\Models\mother;
use Illuminate\Database\Eloquent\Factories\Factory;

class motherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = mother::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName($gender="female"),
            'lname' => $this->faker->lastName,
            'birthday' => $this->faker-> dateTimeBetween($startDate = '-40 years', $endDate = 'now', $timezone = null),
        ];
    }
}
