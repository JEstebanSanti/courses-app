<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'jorge',
            'email' => 'jorge123@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'ramon',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'dan',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'diego',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'felix',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'diana',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'francisco',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Alejandra',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Cristian',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Adriana',
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
