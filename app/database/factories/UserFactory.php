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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Content::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'price' => $faker->price,
        'order' => $faker->order,
        'placename' => $faker->placename,
        'gmap' => $faker->gmap,
        'prefectures' => $faker->prefectures,
        'address' => $faker->address,
        'value' => $faker->value,
        'content_status' => $faker->content_status,
        'report_status' => $faker->report_status,

    ];
});