<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('111111'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Flyer::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\Models\User::class)->create()->id,
        'name' => $faker->name,

        'yuanyin' => '因病',
        'cun' => '张塘村',
        'dibaoshu' => '1',
        'tuopinnianfen' => '2017',
        'gendi' => $faker->numberBetween(1, 4),
        'ruhulu' => '水泥路',
        'weishengce' => '有',

        'description' => $faker->paragraph($faker->randomDigitNotNull)
    ];
});