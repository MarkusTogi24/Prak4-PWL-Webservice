<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => ucwords($this->faker->words(3, true)),
            'body' => $this->faker->paragraphs(2, true),
            'author' => $this->faker->name(),
        ];
    }
}
