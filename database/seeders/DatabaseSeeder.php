<?php

namespace Database\Seeders;

use App\Models\faq;
use App\Models\galeria;
use App\Models\inicio;
use App\Models\servicios;
use App\Models\team;
use App\Models\testimonio;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        //Insertar datos en la tabla inicio
        inicio::factory()->create([
            'navbar' => 'true',
            'titulo' => 'Lescano',
            'keywords' => 'metas',
            'description' => 'descripción',
            'icon' => 'logo.png',
            'Textologo' => 'Mslescano',
            'tituloSlider1' => 'AUTOMATIZACION',
            'textoSlider1' => 'DE PUERTAS LEVADIZAS',
            'imgSlider1' => 'default-icon.png',
            'tituloSlider2' => 'MANTENIMIENTO',
            'textoSlider2' => 'PREVENTIVO Y CORRECTIVO DE PORTONES',
            'imgSlider2' => 'default-icon.png',
            'tituloSlider3' => 'VENTA',
            'textoSlider3' => 'DE CONTROLES, TARJETAS Y ACCESORIOS',
            'imgSlider3' => 'default-icon.png',
            'imgNosotros' => 'default-icon.png',
            'TituloNosotros' => '25+ Años de Experiencia',
            'textoNosotros' => 'Trabajando en la industria',
            'descripcionNosotros' => 'Multisericios Lescano es una destacada empresa trujillana con más de 20 años de experiencia en la instalación y mantenimiento de una amplia gama de portones automáticos. Respaldados por la confianza de miles de clientes satisfechos, nuestro equipo de expertos está dedicado a brindar servicios de calidad, abarcando sistemas seccionales, levadizos, corredizos y batientes. También ofrecemos mantenimiento preventivo y correctivo para tus portones, además de la venta de controles, tarjetas y accesorios. Con una variedad de equipos de las mejores marcas nacionales y un equipo de especialistas comprometidos, nos esforzamos por garantizar tu satisfacción en cada paso.',
            'modalTituloNosotros' => 'Solar Energy System',
            'modalImgNosotros' => 'default-icon.png',
            'modalTextoNosotros' => 'Sit eos diam rebum amet stet sit lorem invidunt, kasd dolor ea dolores ut nonumy, sea est rebum dolore dolor. Lorem tempor tempor gubergren dolor dolor dolor. Kasd amet labore voluptua justo diam, dolore accusam duo est stet nonumy tempor dolores sadipscing duo. Stet at et nonumy erat et sed.Sit eos diam rebum amet stet sit lorem invidunt, kasd dolor ea dolores ut nonumy, sea est rebum dolore dolor. Lorem tempor tempor gubergren dolor dolor dolor. Kasd amet labore voluptua justo diam, dolore accusam duo est stet nonumy tempor dolores sadipscing duo. Stet at et nonumy erat et sed.',
            'TextoGaleria' => "Nuestros Proyectos",
        ]);

        servicios::factory()->create([
            'nombre' => 'PORTONES SECCIONALES LATEARES',
            'imagen' => 'default-icon.png',
            'nombreModal' => 'PORTONES SECCIONALES LATEARES',
            'imagenModal' => 'default-icon.png',
            'textoModal' => 'PORTONES SECCIONALES LATEARES',
            'inicio_id' => '1',
        ]);

        servicios::factory()->create([
            'nombre' => 'PORTONES SECCIONALES VERTICALES',
            'imagen' => 'default-icon.png',
            'nombreModal' => 'PORTONES SECCIONALES VERTICALES',
            'imagenModal' => 'default-icon.png',
            'textoModal' => 'PORTONES SECCIONALES VERTICALES',
            'inicio_id' => '1',
        ]);

        servicios::factory()->create([
            'nombre' => 'PORTONES SECCIONALES HACIA EL TECHO',
            'imagen' => 'default-icon.png',
            'nombreModal' => 'PORTONES SECCIONALES HACIA EL TECHO',
            'imagenModal' => 'default-icon.png',
            'textoModal' => 'PORTONES SECCIONALES HACIA EL TECHO',
            'inicio_id' => '1',
        ]);

        galeria::factory()->create([
            'imagen' => 'default-icon.png',
            'inicio_id' => '1',
        ]);
        galeria::factory()->create([
            'imagen' => 'default-icon.png',
            'inicio_id' => '1',
        ]);
        galeria::factory()->create([
            'imagen' => 'default-icon.png',
            'inicio_id' => '1',
        ]);
        galeria::factory()->create([
            'imagen' => 'default-icon.png',
            'inicio_id' => '1',
        ]);
        galeria::factory()->create([
            'imagen' => 'default-icon.png',
            'inicio_id' => '1',
        ]);
        galeria::factory()->create([
            'imagen' => 'default-icon.png',
            'inicio_id' => '1',
        ]);

        team::factory()->create([
            'nombre' => 'Donald John',
            'puesto' => 'CEO & Founder',
            'texto' => 'Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem',
            'imagen' => 'default-icon.png',

            'twitter' => 'https://twitter.com/',
            'facebook' => 'https://facebook.com/',
            'instagram' => 'https://instagram.com/',

            'inicio_id' => '1',
        ]);
        team::factory()->create([
            'nombre' => 'Adam Phillips',
            'puesto' => 'Engineer',
            'texto' => 'Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem',
            'imagen' => 'default-icon.png',

            'twitter' => 'https://twitter.com/',
            'facebook' => 'https://facebook.com/',
            'instagram' => 'https://instagram.com/',

            'inicio_id' => '1',
        ]);
        team::factory()->create([
            'nombre' => 'Thomas Olsen',
            'puesto' => 'Engineer',
            'texto' => 'Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem lorem',
            'imagen' => 'default-icon.png',

            'twitter' => 'https://twitter.com/',
            'facebook' => 'https://facebook.com/',
            'instagram' => 'https://instagram.com/',

            'inicio_id' => '1',
        ]);
        faq::factory()->create([
            "pregunta" => "Why Switch to Solar?",
            "respuesta1" => "Vero dolor amet no eos ipsum erat",
            "respuesta2" => "Lorem tempor tempor gubergren dolor dolor dolor",
            "respuesta3" => "Nonumy tempor dolores sadipscing duo",
            "respuesta4" => "Kasd dolor ea dolores ut nonumy",

            "inicio_id" => "1",
        ]);
        faq::factory()->create([
            "pregunta" => "Why Choose Us?",
            "respuesta1" => "Vero dolor amet no eos ipsum erat",
            "respuesta2" => "Lorem tempor tempor gubergren dolor dolor dolor",
            "respuesta3" => "Nonumy tempor dolores sadipscing duo",
            "respuesta4" => "Kasd dolor ea dolores ut nonumy",

            "inicio_id" => "1",
        ]);
        testimonio::factory()->create([
            "nombre" => "John Doe",
            "cargo" => "CEO",
            "imagen" => "default-icon.png",
            "texto" => "Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo",
            "inicio_id" => "1",
        ]);
        testimonio::factory()->create([
            "nombre" => "Jane Doe",
            "cargo" => "CEO",
            "imagen" => "default-icon.png",
            "texto" => "Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo",
            "inicio_id" => "1",
        ]);
        testimonio::factory()->create([
            "nombre" => "Maria vazquez",
            "cargo" => "Consultor",
            "imagen" => "default-icon.png",
            "texto" => "Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo",
            "inicio_id" => "1",
        ]);
        testimonio::factory()->create([
            "nombre" => "Pedro Perez",
            "cargo" => "Conductor",
            "imagen" => "default-icon.png",
            "texto" => "Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo",
            "inicio_id" => "1",
        ]);
        testimonio::factory()->create([
            "nombre" => "Jose Carlos",
            "cargo" => "President",
            "imagen" => "default-icon.png",
            "texto" => "Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo",
            "inicio_id" => "1",
        ]);
    }
}
