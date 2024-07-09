<?php

namespace Database\Factories;

use App\Models\inicio;
use App\Models\servicios;
use Illuminate\Database\Eloquent\Factories\Factory;

class InicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = inicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'navbar'=> $this->faker->word,
            'titulo' => $this->faker->word,
            'keywords' => $this->faker->word,
            'description' => $this->faker->sentence,
            'icon' => 'default-icon.png',
            //navegación
            'Textologo' => $this->faker->word,
            //hero
            'tituloSlider1' => $this->faker->word,
            'tituloSlider2' => $this->faker->word,
            'tituloSlider3' => $this->faker->word,
            'textoSlider1' => $this->faker->word,
            'textoSlider2' => $this->faker->word,
            'textoSlider3' => $this->faker->word,
            'imgSlider1' => 'default-icon.png',
            'imgSlider2' => 'default-icon.png',
            'imgSlider3' => 'default-icon.png',
            //about
            'imgNosotros' => 'default-icon.png',
            'TituloNosotros' => $this->faker->word,
            'textoNosotros' => $this->faker->word,
            'descripcionNosotros' => $this->faker->word,
            'modalTituloNosotros' => $this->faker->word,
            'modalImgNosotros' => 'default-icon.png',
            'modalTextoNosotros' => $this->faker->word,
        ];
    }
}
