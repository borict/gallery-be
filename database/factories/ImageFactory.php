<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition()
    {
        return [
            'url' => fake()->imageUrl($width = 640, $height = 480),
            'gallery_id' => function() {
                return Gallery::all()->random()->id;
            }
        ];
    }
}
