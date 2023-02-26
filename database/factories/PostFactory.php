<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

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
    public function definition(): array
    {

        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        return [
            'user_id' => Arr::random($array),
            'title' => fake()->words(4, true),
            'body' => fake()->words(15, true),
            'image' => fake()->image('public/image'),
            'created_at' => now(),
        ];
    }
}
