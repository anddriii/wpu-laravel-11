<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "category" => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            "category" => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            "category" => 'Data Structure',
            'slug' => 'data-structure'
        ]);

        Category::create([
            "category" => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            "category" => 'UI UX',
            'slug' => 'ui-ux'
        ]);
    }
}
