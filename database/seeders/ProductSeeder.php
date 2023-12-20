<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::factory()->create([
            'nome' => 'Notebook',
            'categoria' => 'Tecnologia',
            'valor' => 1499.90,
            'path' => '/assets/notebook.png',
        ]);
    }
}
