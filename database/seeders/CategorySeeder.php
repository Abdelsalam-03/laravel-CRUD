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
        DB::table('categories')->insert(['name' => 'Cars']);
        DB::table('categories')->insert(['name' => 'Smart Watches']);
        DB::table('categories')->insert(['name' => 'Moblies']);
        DB::table('categories')->insert(['name' => 'Laptops']);
        DB::table('categories')->insert(['name' => 'Electronics']);
        DB::table('categories')->insert(['name' => 'Tools']);
    }
}
