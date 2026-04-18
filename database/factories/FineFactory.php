<?php

namespace Database\Factories;

use App\Models\Fine;
use Illuminate\Database\Eloquent\Factories\Factory;

class FineFactory extends Factory
{
    protected $model = Fine::class;

    public function definition(): array
    {
        return [
            'loan_id' => null,
            'amount'  => fake()->randomFloat(2, 5, 50),
            'reason'  => fake()->sentence(),
            'status'  => 'pending',
            'paid_at' => null,
        ];
    }
}