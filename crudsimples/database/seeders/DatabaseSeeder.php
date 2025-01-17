<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computador;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Computador::create(['marca' => 'Lenovo', 'preco' => 5000, 'ram' => 8, 'disco' => 500]);
        Computador::create(['marca' => 'Acer', 'preco' => 4800, 'ram' => 8, 'disco' => 500]);
        Computador::create(['marca' => 'Samsung', 'preco' => 7200, 'ram' => 16, 'disco' => 1000]);
    }
}
