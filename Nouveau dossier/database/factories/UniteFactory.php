<?php

$factory->define(App\Unite::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
    ];
});
