<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
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
