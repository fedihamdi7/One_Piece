<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Club;
use App\Model;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'event_date'=> $faker->date(),
        'event_image'=> $faker->imageUrl(),
       'club_id'=>Club::get('id')->random() ,

    ];
});
