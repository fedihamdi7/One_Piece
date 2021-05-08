<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Club;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_description' => $faker->sentence,
        'post_image' => $faker->imageUrl(),
        'post_title' => $faker->word,
        'Club_id' => Club::get('id')->random(),
    ];
});
