<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Department;
use App\Club;
use Faker\Generator as Faker;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'club_name'=> $faker->word,
        'club_img'=> $faker->imageUrl(),
        'club_theme'=> $faker->hexcolor,
       'departments_id'=>Department::get('id')->random() ,
       'users_id'=>User::get('id')->random(),



    ];
});
