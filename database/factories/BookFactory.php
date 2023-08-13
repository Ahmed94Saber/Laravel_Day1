<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Book::class;
    public function definition(): array
    {
        return [
            "title" => fake()->sentence($nbWords = 3,$variableNBWords = true),
            "price" => fake()->randomDigit(),
            "description" => fake()->text(),
            "pic" => fake()->imageUrl()
        ];
    }
}
