<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Guesser\Name;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Book::factory(20)->create();
        \App\Models\BookCategory::factory(5)->create();



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            \App\Models\User::factory()->create([
            'name' => 'test',
            'email' => 'test@gmail.com',
        ]);

            \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
        ]);

        \App\Models\BookCategory::factory()->create([
            'name' => "လုံးချင်း",            
        ]);
        \App\Models\BookCategory::factory()->create([
            'name' => "သုတ/ရသ",            
        ]);
    }
}
