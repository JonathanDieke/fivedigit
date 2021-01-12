<?php

namespace Database\Factories;

use App\Models\child;
use Illuminate\Database\Eloquent\Factories\Factory;

class childFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = child::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hospital_id' => $this->faker->numberBetween($min=1, $max=100),
            'father_id' => $this->faker->numberBetween($min=1, $max=50),
            'mother_id' => $this->faker->numberBetween($min=1, $max=50),
            'document_id' => $this->faker->numberBetween($min=1, $max=20),
            'name' => $this->faker->firstName(),
            'lname' => $this->faker->lastName,
            'birthday' => $this->faker-> dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        ];
    }
}
