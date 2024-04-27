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
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo', 100);
            $table->string('pregunta1', 200);
            $table->string('pregunta2', 200);
            $table->string('pregunta3', 200);
            $table->string('pregunta4', 200);
            $table->string('pregunta5', 200);
            $table->string('pregunta6', 200);
            $table->string('pregunta7', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendizs');
    }
};
