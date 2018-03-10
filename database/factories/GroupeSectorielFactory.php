<?php

$factory->define(App\GroupeSectoriel::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
