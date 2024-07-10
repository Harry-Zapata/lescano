<?php

namespace Database\Factories;

use App\Models\testimonio;
use Illuminate\Database\Eloquent\Factories\Factory;

class testimonioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = testimonio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'cargo' => $this->faker->word,
            'imagen' => $this->faker->word,
            'texto' => $this->faker->word,
            'inicio_id' => $this->faker->randomDigitNotNull,
        ];
    }
}
