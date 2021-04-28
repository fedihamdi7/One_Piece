<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club_info;
use App\Club;
use Faker\Generator as Faker;

$factory->define(Club_info::class, function (Faker $faker) {
    return [
        'about_us' => $faker->sentence,
        'event_description' => $faker->sentence,
        'Club_id'=> Club::get('id')->random(),
    ];
});
