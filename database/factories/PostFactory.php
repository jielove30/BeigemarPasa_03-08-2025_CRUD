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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,         // Random title (string)
            'body' => $this->faker->text,              // Random body (text)
            'created_at' => $this->faker->dateTimeThisYear, // Random created_at timestamp
            'updated_at' => $this->faker->dateTimeThisYear, // Random updated_at timestamp
        ];
    }
}
