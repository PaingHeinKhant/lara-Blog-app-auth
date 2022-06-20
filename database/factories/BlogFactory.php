<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([0 => "mixed", "title" => "string", "description" => "string"])] public function definition(): array
    {
        return [
            "title"=> $this->faker->sentence(10),
            "description" => $this->faker->realText(1000)
        ];
    }
}
