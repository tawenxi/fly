<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Family::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'sex' => $faker->randomElement(['男','女']),
        'ralationship' => $faker->randomElement(['之妻','之女','之子','之母','之父']),
        'birthday'=>$faker->dateTimeBetween('-70 years','now'),
        'schoolage' => $faker->randomElement(['文盲','小学','初中','高中','大学']),
        'work' => $faker->randomElement(['上学','务工','务农','休息']),
        'healthy' => $faker->randomElement(['健康','患病']),
        'salary'	=> $faker->numberBetween(0,3000),
        'workmonth' => $faker->numberBetween(0,12),
        'description' => $faker->sentence,
        'flyer_id' => $faker->numberBetween(0,6),

    ];
});
