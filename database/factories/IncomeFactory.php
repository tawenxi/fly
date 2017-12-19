<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Income::class, function (Faker $faker) {
    return [
        'flyer_id' => $faker->randomElement([1,2,3,4,5]),
        'type'=>$faker->randomElement(['低保','务工','耕地保护补助']),
        'zy'=>$faker->word,
        'amount'=>$faker->numberBetween(0,2000),
        'date'=>$faker->dateTimeThisYear(),
    ];
});
