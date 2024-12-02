<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 5),
        'author' => $faker->numberBetween(1, 10),
        'publisher' => $faker->name(),
        'title' => $faker->sentence(3),
        'slug' => Str::slug($faker->sentence()),
        // 'slug' => $faker->sentence(),
        'description' => $faker->sentence(),
        'news_content' => $faker->paragraph(20, false),
        'tags' => $faker->words(3, true),
        'click_count' => $faker->numberBetween(0, 150),
        'image' => 'https://picsum.photos/id/' . rand(1, 1000) . '/200/300',
    ];
});
