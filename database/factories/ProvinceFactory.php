<?php

$factory->define(App\Province::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
