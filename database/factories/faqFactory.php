<?php

namespace Database\Factories;

use App\Models\faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class faqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = faq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pregunta' => $this->faker->word,
            'respuesta1' => $this->faker->word,
            'respuesta2' => $this->faker->word,
            'respuesta3' => $this->faker->word,
            'respuesta4' => $this->faker->word,

            'inicio_id' => $this->faker->randomDigitNotNull,
        ];
    }
}
