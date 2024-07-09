<?php

namespace Database\Factories;

use App\Models\galeria;
use Illuminate\Database\Eloquent\Factories\Factory;

class galeriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = galeria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imagen' => $this->faker->word,
            'inicio_id' => $this->faker->randomDigitNotNull,
        ];
    }
}
