<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User_request;
use Faker\Generator as Faker;

$factory->define(User_request::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker-> freeEmail,
        'email_verified_at' => now(),
        'password'=> $faker -> password,
        'image' => $faker-> imageUrl(),
        'type' => $faker-> randomElement(['admin', 'responsable','membre']),
        'remember_token' => $faker -> word,
    ];
});
