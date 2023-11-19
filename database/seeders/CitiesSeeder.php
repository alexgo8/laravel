<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    DB::table('cities')->insert([
      [ 'name' => 'Краснодар',
        'population'  => '1050000',
        'id_country' => '1',              
      ],
      [
        'name' => 'Москва',
        'population'  => '8545200',
        'id_country' => '1',
      ],
      [
        'name' => 'Крымск',
        'population'  => '54000',
        'id_country' => '1',
      ],
      [
        'name' => 'Новороссийск',
        'population'  => '240000',
        'id_country' => '1',
      ],
      [
        'name' => 'Минск',
        'population'  => '3454000',
        'id_country' => '2',
      ],
      [
        'name' => 'Гомель',
        'population'  => '484000',
        'id_country' => '2',
      ],
      [
        'name' => 'Бретск',
        'population'  => '221500',
        'id_country' => '2',
      ],
      [
        'name' => 'Берлин',
        'population'  => '12453000',
        'id_country' => '3',
      ],
      [
        'name' => 'Кёльн',
        'population'  => '2453000',
        'id_country' => '3',
      ],
      [
        'name' => 'Мюнхен',
        'population'  => '745000',
        'id_country' => '3',
      ],
      [
        'name' => 'Нью-Йорк',
        'population'  => '25434700',
        'id_country' => '4',
      ],
      [
        'name' => 'Вашингтон',
        'population'  => '1725300',
        'id_country' => '4',        
      ],
      [
        'name' => 'Сан-Франциско',
        'population'  => '2345000',
        'id_country' => '4',
      ],
            
    ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
