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
            'name' => 'desarrollo IA'
        ]);
    }
}
