<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Dell XPS 13',
                'price' => 1200.99,
                'description' => 'High-end ultrabook with powerful performance.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'iPhone 15 Pro',
                'price' => 999.99,
                'description' => 'Flagship Apple smartphone with advanced camera features.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'price' => 399.99,
                'description' => 'Premium noise-canceling headphones.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
