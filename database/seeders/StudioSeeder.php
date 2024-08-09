<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $estudios = [
            'Warner Bros.',
            'Universal Pictures',
            '20th Century Studios',
            'Columbia Pictures',
            'Paramount Pictures',
            'Sony Pictures',
            'Walt Disney Pictures',
            'Metro-Goldwyn-Mayer (MGM)',
            'DreamWorks Pictures',
            'Lionsgate',
            'Focus Features',
            'New Line Cinema',
            'A24',
            'Pixar Animation Studios',
            'Illumination Entertainment',
        ];
        foreach ($estudios as $estudio) {
            Studio::create(['name' => $estudio]);
        }
    }
}
