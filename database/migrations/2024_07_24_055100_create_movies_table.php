<?php

use App\Models\Category;
use App\Models\Studio;
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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // ID de la película
            $table->string('title'); // Título de la película
            $table->integer('publication_year'); // Año de publicación de la película
            $table->foreignIdFor(Studio::class)->constrained()->cascadeOnDelete(); // ID del estudio
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
