<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            'name' => 'Curso 1',
            'start_date'=> date('10-05-2024'),
            'end_date'=> date('01-10-2024'),
            'user_id' => 1,
            'category_id' => 3,
        ]);
        DB::table('courses')->insert([
            'name' => 'Curso 2',
            'start_date'=> date('12-12-2024'),
            'end_date'=> date('06-05-2025'),
            'user_id' => 1,
            'category_id' => 2,
        ]);
        DB::table('courses')->insert([
            'name' => 'Curso 3',
            'start_date'=> date('23-04-2024'),
            'end_date'=> date('10-07-2024'),
            'user_id' => 1,
            'category_id' => 2,
        ]);
    }
}
