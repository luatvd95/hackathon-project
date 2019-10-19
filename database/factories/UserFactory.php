<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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
	$roles = array('teacher','student','admin');
	$avatar = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'role' => array_random($roles),
        'avatar' => array_random($avatar),
        'remember_token' => Str::random(10),
    ];
});
