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
            ['name' => 'Máy vi tính','desciption'=>'Thật đẹp','slug'=>'ngáo hả' , 'status'=> '1','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Máy vi tính','desciption'=>'Thật đẹp','slug'=>'ngáo hả' , 'status'=> '1','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Máy vi tính','desciption'=>'Thật đẹp','slug'=>'ngáo hả' , 'status'=> '1','created_at' => now(), 'updated_at' => now()],
            
            
        ]);
    }
    }

