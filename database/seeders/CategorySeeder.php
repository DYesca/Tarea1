<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            'Acción',
            'Aventura',
            'Comedia',
            'Drama',
            'Terror',
            'Ciencia Ficción',
            'Fantasía',
            'Romance',
            'Thriller',
            'Misterio',
            'Animación',
            'Documental',
            'Biográfico',
            'Musical',
            'Histórico',
            'Deportes',
            'Guerra',
            'Western',
        ];
        foreach ($generos as $genero) {
            Category::create(['name' => $genero]);
        }
    }
}
