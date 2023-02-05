<?php

namespace Database\Factories;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'body' => fake()->sentence(),
            'user_id' =>   User::inRandomOrder()->first()->id,
            'gallery_id' => Gallery::inRandomOrder()->first()->id,
        ];
    }
}
