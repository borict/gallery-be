<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);

        $this->call([
            GallerySeeder::class
        ]);

        $this->call([
            ImageSeeder::class
        ]);

        $this->call([
            CommentSeeder::class
        ]);
    }
}
