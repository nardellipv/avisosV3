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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->string('title'); // Título del blog
            $table->text('content'); // Contenido del blog
            $table->string('image')->nullable(); // Imagen del blog (opcional)
            $table->boolean('is_published')->default(false); // Estado de publicación
            $table->string('slug')->unique(); // Slug para URL amigable

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
