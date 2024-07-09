<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inicios', function (Blueprint $table) {
            $table->id();
            $table->string('navbar');
            $table->string('titulo');
            $table->string('keywords');
            $table->string('description');
            $table->string('icon');
            // menu
            $table->string('Textologo');
            //Hero
            $table->string('tituloSlider1');
            $table->string('tituloSlider2');
            $table->string('tituloSlider3');
            $table->string('textoSlider1');
            $table->string('textoSlider2');
            $table->string('textoSlider3');
            $table->string('imgSlider1');
            $table->string('imgSlider2');
            $table->string('imgSlider3');

            // Sobre Nosotros
            $table->string('imgNosotros');
            $table->string('TituloNosotros');
            $table->string('textoNosotros');
            $table->string('descripcionNosotros', 2000);
            $table->string('modalTituloNosotros');
            $table->string('modalImgNosotros');
            $table->string('modalTextoNosotros', 2000);

            // Galeria
            $table->string('TextoGaleria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inicios');
    }
};
