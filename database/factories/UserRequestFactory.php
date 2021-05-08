<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User_request;
use Faker\Generator as Faker;

$factory->define(User_request::class, function (Faker $faker) {
    return [
        'user_name' => $faker->name,
        'user_email' => $faker-> freeEmail,
        'email_verified_at' => now(),
        'user_password'=> $faker -> password,
        'user_image' => $faker-> imageUrl(),
        'user_type' => $faker-> randomElement(['admin', 'responsable','membre']),
        'remember_token' => $faker -> word,
    ];
});
