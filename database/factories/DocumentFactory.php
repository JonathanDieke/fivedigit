<?php

namespace Database\Factories;

use App\Models\document;
use Illuminate\Database\Eloquent\Factories\Factory;

class documentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mayor_id' => $this->faker->numberBetween($min = 1, $max = 100),
            'child_id' => $this->faker->numberBetween($min=1, $max=20),
            'code' => $this->faker-> regexify('[A-Z0-9]+[A-Z0-9.-]+\.[A-Z]{2,4}'),
        ];
    }
}
