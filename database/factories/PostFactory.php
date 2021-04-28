<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Club;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'img' => $faker->imageUrl(),
        'title' => $faker->word,
        'Club_id' => Club::get('id')->random(),
    ];
});
