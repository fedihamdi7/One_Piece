<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Club;
use App\Model;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'date'=> $faker->date(),
        'img'=> $faker->imageUrl(),
       'club_id'=>Club::get('id')->random() ,
       
    ];
});
