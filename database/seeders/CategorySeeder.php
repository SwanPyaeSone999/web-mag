<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);
        $category = Category::create([
            'name' => 'Computer Science',
            'slug' => 'computer-science',
        ]);
        $category = Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
        $category = Category::create([
            'name' => 'Desigin',
            'slug' => 'design',
        ]);
    }
}