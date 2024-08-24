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
            'slug' => 'web-programming',
            'color'=> 'blue'
        ]);

        Category::create([
            "category" => 'Machine Learning',
            'slug' => 'machine-learning',
            'color'=> 'red'
        ]);

        Category::create([
            "category" => 'Data Structure',
            'slug' => 'data-structure',
            'color'=> 'green'
        ]);

        Category::create([
            "category" => 'Web Desain',
            'slug' => 'web-desain',
            'color'=> 'yellow'
        ]);

        Category::create([
            "category" => 'UI UX',
            'slug' => 'ui-ux',
            'color'=> 'purple'
        ]);
    }
}
