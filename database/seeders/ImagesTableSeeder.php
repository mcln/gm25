<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            ['name' => 'fondo_cuaderno', 'image_path' => '/images/fondo_cuaderno.gif'],
            ['name' => 'fondo_cuadriculado', 'image_path' => '/images/fondo_cuadr_chico.gif'],
        ];

        foreach ($images as $imageData) {
            $image = new Image($imageData);
            $image->save();
        }
    }
}
