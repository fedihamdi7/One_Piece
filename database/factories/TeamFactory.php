<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use App\Team;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->name,
        'img'=> $faker->imageUrl(),
        'titre'=> $faker->word,
        'fb'=> $faker->url,
        'insta'=> $faker->url,
        'twitter'=> $faker->url,
        'linkedin'=> $faker->url,
        'club_id'=>Club::get('id')->random(),
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
