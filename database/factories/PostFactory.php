<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        $slug = str()->slug($name);
        return [
            'user_id' => rand(1,3),
            'category_id' => rand(1,4),
            'name' => $name,
            'slug' => $slug,
            'thumbnail' => null,
            'body' => $this->faker->paragraph(5),
        ];
    }
}