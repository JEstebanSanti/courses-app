<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'desarrollo mobil'
        ]);
        DB::table('categories')->insert([
            'name' => 'desarrollo web'
        ]);
        DB::table('categories')->insert([
            'name' => 'Ciberseguridad'
        ]);
        DB::table('categories')->insert([
            'name' => 'Unity Video juegos'
        ]);
        DB::table('categories')->insert([
            'name' => 'Unreal Video juegos'
        ]);
        DB::table('categories')->insert([
            'name' => 'desarrollo IA'
        ]);
        DB::table('categories')->insert([
            'name' => 'Creacion de contenido'
        ]);
        DB::table('categories')->insert([
            'name' => 'Edición de video'
        ]);
        DB::table('categories')->insert([
            'name' => 'Estructura de datos'
        ]);
        DB::table('categories')->insert([
            'name' => 'Redes'
        ]);
    }
}
