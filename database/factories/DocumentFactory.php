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
            'mayor_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'child_id' => $this->faker->numberBetween($min=1, $max=5),
            'user_id' => 1,
            'code' => $this->faker->regexify('[0-9]+[0-9]{2,6}'),
        ];
    }
}
