<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\EducationLevel;
use App\Models\EmailDomain;
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
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->email,
        'education_id' => EducationLevel::all()->random()->id,
        'phone' => $faker->phoneNumber,
        'terms' => $faker->boolean,
    ];
});
