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
                'title' => 'Laptop Dell XPS 13',
                'price' => 1200.99,
                'content' => 'Rất đẹp',
                'sale_price' => 1200.00,
                'short_description' => 'High-end ultrabook with powerful performance.',
                'status' => '1',
                'category_id' => 1,
                'thumbnail' => fake()->imageUrl(640, 480, 'technology', true, 'Laptop'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            
            [
                'title' => 'Iphone 13',
                'price' => 1200.99,
                'content' => 'Rất đẹp',
                'sale_price' => 1200.00,
                'short_description' => 'High-end ultrabook with powerful performance.',
                'status' => '1',
                'category_id' => 2,
                'thumbnail' => fake()->imageUrl(640, 480, 'technology', true, 'Laptop'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Iphone 15',
                'price' => 1200.99,
                'content' => 'Rất đẹp',
                'sale_price' => 1200.00,
                'short_description' => 'High-end ultrabook with powerful performance.',
                'status' => '1',
                'category_id' => 3,
                'thumbnail' => fake()->imageUrl(640, 480, 'technology', true, 'Laptop'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
