<?php

$factory->define(App\StatutMission::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
