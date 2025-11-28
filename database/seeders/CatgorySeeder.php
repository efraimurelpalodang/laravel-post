<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatgorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
        ]);
        Category::create([
            'name' => 'Data Sience',
            'slug' => 'data-sience',
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
    }
}
