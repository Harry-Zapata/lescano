<?php

namespace Database\Factories;

use App\Models\servicios;
use Illuminate\Database\Eloquent\Factories\Factory;

class serviciosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = servicios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'imagen' => $this->faker->word,
            'nombreModal' => $this->faker->word,
            'imagenModal' => $this->faker->word,
            'textoModal' => $this->faker->word,
            'inicio_id' => $this->faker->randomDigitNotNull,
        ];
    }
}
