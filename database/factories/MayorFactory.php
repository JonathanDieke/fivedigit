<?php

namespace Database\Factories;

use App\Models\mayor;
use Illuminate\Database\Eloquent\Factories\Factory;

class mayorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = mayor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commune_id' => $this->faker->numberBetween($min = 1, $max=100),
            'libel' => "Mairie de " . $this->faker->streetSuffix,
        ];
    }
}
