<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    DB::table('countries')->insert([
      [ 'name' => 'Россия',
        'number_of_cities'  => 'null',        
      ],
      [
        'name' => 'Беларуссия',
        'number_of_cities'  => 'null',
      ],
      [
        'name' => 'Германия',
        'number_of_cities'  => 'null',
      ],
      [
        'name' => 'Америка',
        'number_of_cities'  => 'null',
      ],
            
    ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
