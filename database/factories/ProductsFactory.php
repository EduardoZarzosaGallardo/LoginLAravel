<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'image' =>$faker->image('public/images',640, 480, null,true),
        'name' =>$faker->name,
        'description' =>$faker->name,
        'price' =>$faker->randomDigit,

    ];
});
