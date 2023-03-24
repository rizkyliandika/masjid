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
     * @return array<string, mixed>
     */
    public function definition()
    {
        date_default_timezone_set('Asia/Jakarta');
        return [
            'title' => fake()->slug(2),
            'body' => fake()->paragraph(50),
            'slug' => fake()->unique()->slug(),
            'metaTitle' => fake()->slug(2),
            'publishedAt' => fake()->dateTime('now', date_default_timezone_get())
        ];
    }
}
