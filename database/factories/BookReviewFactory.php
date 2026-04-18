<?php

namespace Database\Factories;

use App\Models\BookReview;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookReviewFactory extends Factory
{
    protected $model = BookReview::class;

    public function definition(): array
    {
        return [
            'book_id'   => null,
            'member_id' => null,
            'rating'    => fake()->numberBetween(1, 5),
            'title'     => fake()->sentence(),
            'body'      => fake()->paragraph(),
        ];
    }
}