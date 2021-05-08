<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use App\Team;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        //
        'team_name'=> $faker->name,
        'team_img'=> $faker->imageUrl(),
        'team_titre'=> $faker->word,
        'team_fb'=> $faker->url,
        'team_insta'=> $faker->url,
        'team_twitter'=> $faker->url,
        'team_linkedin'=> $faker->url,
        'club_id'=>Club::get('id')->random(),
        'created_at'=>now(),
        'updated_at'=>now(),
    ];
});
