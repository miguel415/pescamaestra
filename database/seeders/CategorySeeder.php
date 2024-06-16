<?php
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Pesca deportiva',
            'description' => 'Cursos relacionados con la pesca deportiva',
            'image' => 'ruta/a/imagen1.png',
        ]);

        Category::create([
            'name' => 'Pesca comercial',
            'description' => 'Cursos relacionados con la pesca comercial',
            'image' => 'ruta/a/imagen2.png',
        ]);

        Category::create([
            'name' => 'Pesca recreativa',
            'description' => 'Cursos para pesca recreativa',
            'image' => 'ruta/a/imagen3.png',
        ]);

        Category::create([
            'name' => 'Pesca en agua dulce',
            'description' => 'Cursos específicos para pesca en agua dulce',
            'image' => 'ruta/a/imagen4.png',
        ]);

        Category::create([
            'name' => 'Pesca en agua salada',
            'description' => 'Cursos específicos para pesca en agua salada',
            'image' => 'ruta/a/imagen5.png',
        ]);
    }
}
