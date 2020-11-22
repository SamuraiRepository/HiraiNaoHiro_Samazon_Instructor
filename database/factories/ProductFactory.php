<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $categories = \App\Category::pluck('id')->toArray();
    return [
        'name' => $faker->title,
        'description' => $faker->paragraph,
        'price' => $faker->randomNumber(4),
        'category_id' => $faker->randomElement($categories),
    ];
});
