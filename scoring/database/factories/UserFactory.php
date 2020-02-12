<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\EducationLevel;
use App\Models\EmailDomain;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
    $email = [Str::random(10) . '@' . EmailDomain::all()->random()->name, $faker->unique()->freeEmail];
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => Arr::random($email),
        'education_id' => EducationLevel::all()->random()->id,
        'phone' => $faker->regexify("^79[0-9]{9}$"),
        'terms' => $faker->boolean,
    ];
});
