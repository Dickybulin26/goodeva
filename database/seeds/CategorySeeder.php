<?php
// namespace Database\Seeders;

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
