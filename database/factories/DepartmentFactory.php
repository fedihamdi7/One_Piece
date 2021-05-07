<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'nom_department' => $faker->randomElement(['Informatique', 'Electrique','Mecanique','Genie Procedes','Economie']),
        'clubs_count'=> $faker->randomDigitNotNull,
        

            
    ];
});
