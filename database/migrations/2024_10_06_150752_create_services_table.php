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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->mediumText('description');
            $table->enum('status', ['Activo', 'Pausado', 'Desactivo', 'Pendiente']);
            $table->enum('publish', ['Free', 'Destacado']);
            $table->string('phone')->nullable();
            $table->enum('phoneWsp', ['Y', 'N'])->default('Y');
            $table->integer('visit')->default(0);
            $table->integer('like')->default(0);
            $table->string('photo')->nullable();
            $table->date('end_date');
            $table->integer('sendPromotion')->default(0);

            //relaciones
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('subcategory_id')
                ->nullable()
                ->constrained('subcategories') // Asegúrate de que esta tabla existe
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('region_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('ref')->unique();

            $table->string('slug');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
