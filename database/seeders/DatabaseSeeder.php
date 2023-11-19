<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    DB::table('papers')->insert([
      ['title' => 'Мама мыла раму Заголовок',
        'papers_text'  => 'Мама какой-то текст',
        'users'  => 'Александр',
        'creation_date'=>'10.11.2023'
      ],
      [
        'title' => 'Фёдор Альпенист Заголовок',
        'papers_text'  => 'Фёдор какой-то текст',
        'users'  => 'Александр',
        'creation_date' => '10.11.2023'
      ],
      [
        'title' => Str::random(16),
        'papers_text'  => Str::random(50),
        'users'  => Str::random(16),
        'creation_date' => '10.11.2023'
      ],
      [
        'title' => Str::random(16),
        'papers_text'  => Str::random(50),
        'users'  => Str::random(16),
        'creation_date' => '10.11.2023'
      ],
      [
        'title' => Str::random(16),
        'papers_text'  => Str::random(50),
        'users'  => Str::random(16),
        'creation_date' => '10.11.2023'
      ],
      [
        'title' => Str::random(16),
        'papers_text'  => Str::random(50),
        'users'  => Str::random(16),
        'creation_date' => '10.11.2023'
      ],
      [
        'title' => Str::random(16),
        'papers_text'  => Str::random(50),
        'users'  => Str::random(16),
        'creation_date' => '10.11.2023'
      ]
      
    ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
