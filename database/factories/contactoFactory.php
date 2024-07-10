<?php

namespace Database\Factories;

use App\Models\contacto;
use Illuminate\Database\Eloquent\Factories\Factory;

class contactoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = contacto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'email' => $this->faker->word,
            'telefono' => $this->faker->word,
            'asunto' => $this->faker->word,
            'mensaje' => $this->faker->word,

            'inicio_id' => $this->faker->randomDigitNotNull,
        ];
    }
}
