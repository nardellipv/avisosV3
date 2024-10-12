<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), // Título del blog
            'content' => $this->faker->paragraphs(3, true), // Contenido del blog
            'image' => $this->faker->imageUrl(640, 480, 'blog', true), // Imagen del blog
            'is_published' => $this->faker->boolean(), // Estado de publicación
            'slug' => $this->faker->unique()->slug(), // Slug para URL amigable
        ];
    }
}
