<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = Movie::factory(10)->create();
        $categories = Category::all();
        foreach ($movies as $movie) {
            $randomCategories = $categories->random(rand(1, 3))->pluck('id');
            $movie->categories()->attach($randomCategories);
        }
    }
}
