<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'product_code' => $faker->name,
        'description' => $faker->name,
    ];
});
