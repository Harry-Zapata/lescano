<?php

namespace Database\Factories;

use App\Models\team;
use Illuminate\Database\Eloquent\Factories\Factory;

class teamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'puesto' => $this->faker->word,
            'texto' => $this->faker->word,
            'imagen' => $this->faker->word,

            'twitter' => $this->faker->word,
            'facebook' => $this->faker->word,
            'instagram' => $this->faker->word,

            'inicio_id' => $this->faker->randomDigitNotNull,
        ];
    }
}
