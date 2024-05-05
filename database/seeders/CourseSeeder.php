<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cursos_tecnologia = [
            'Desarrollo web',
            'Desarrollo de aplicaciones móviles',
            'Diseño UX/UI',
            'Programación en Python',
            'Aprendizaje automático (Machine Learning)',
            'Inteligencia artificial',
            'Ciberseguridad',
            'Análisis de datos',
            'Cloud Computing',
            'Desarrollo de software',
            'Blockchain',
            'Internet de las cosas (IoT)',
            'Realidad aumentada',
            'Realidad virtual',
            'Redes informáticas',
            'Big Data',
            'Diseño de videojuegos',
            'Automatización de procesos',
            'Robótica',
            'Desarrollo de software ágil'
        ];
        $int_random = [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10
        ];

        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('10-05-2024'),
            'end_date' => date('01-10-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('12-12-2024'),
            'end_date' => date('06-05-2025'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
        DB::table('courses')->insert([
            'name' => Arr::random($cursos_tecnologia),
            'start_date' => date('23-04-2024'),
            'end_date' => date('10-07-2024'),
            'user_id' => Arr::random($int_random),
            'category_id' => Arr::random($int_random),
        ]);
    }
}
