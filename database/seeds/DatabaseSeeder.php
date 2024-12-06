<?php

// namespace Database\Seeders;

use App\Post;
use App\User;
use App\Category;
// use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        // factory(Post::class, 50)->create();

        Category::create([
            'category' => 'Programming',
        ]);

        Category::create([
            'category' => 'Data Science',
        ]);

        Category::create([
            'category' => 'Politics',
        ]);

        Category::create([
            'category' => 'Machine Learning',
        ]);

        Category::create([
            'category' => 'Productivity',
        ]);

        Category::create([
            'category' => 'Technology',
        ]);

        Category::create([
            'category' => 'Writing',
        ]);

        Category::create([
            'category' => 'Self Improvement',
        ]);

        Category::create([
            'category' => 'Relationships',
        ]);

        Category::create([
            'category' => 'Artificial Intelligence',
        ]);

        Category::create([
            'category' => 'Business',
        ]);

        Category::create([
            'category' => 'Blockchain',
        ]);
    }
}
