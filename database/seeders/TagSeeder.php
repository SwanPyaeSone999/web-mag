<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = Tag::create([
            'name' => 'css',
        ]);
        $tag = Tag::create([
            'name' => 'php',
        ]);
        $tag = Tag::create([
            'name' => 'javascript',
        ]);
        $tag = Tag::create([
            'name' => 'jquery',
        ]);
        $tag = Tag::create([
            'name' => 'tailwindcss',
        ]);
    }
}