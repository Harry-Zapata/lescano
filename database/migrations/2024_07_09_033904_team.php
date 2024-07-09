<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('puesto');
            $table->string('texto');
            $table->string('imagen');


            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');

            $table->unsignedBigInteger('inicio_id')->nullable()->default(1);
            $table->foreign('inicio_id')->references('id')->on('inicios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};