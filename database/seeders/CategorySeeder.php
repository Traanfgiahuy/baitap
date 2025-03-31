<?php

namespace Database\Seeders;
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
            ['id' => 1 ,'name' => 'Máy vi tính','desciption'=>'Thật đẹp','slug'=>'ngáo hả' , 'status'=> '1',  'thumbnail' => fake()->imageUrl(640, 480, 'technology', true, 'Laptop'),'created_at' => now(), 'updated_at' => now()],
            ['id' =>2 ,'name' => 'Máy vi tính','desciption'=>'Thật đẹp','slug'=>'đẹp quá' , 'status'=> '1',  'thumbnail' => fake()->imageUrl(640, 480, 'technology', true, 'Laptop'),'created_at' => now(), 'updated_at' => now()],
            ['id' =>3 ,'name' => 'Máy vi tính','desciption'=>'Thật đẹp','slug'=>'tuyệt vời' , 'status'=> '1', 'thumbnail' => fake()->imageUrl(640, 480, 'technology', true, 'Laptop'),'created_at' => now(), 'updated_at' => now()],
            
            
        ]);
    }
    }

