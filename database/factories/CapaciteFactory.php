<?php

$factory->define(App\Capacite::class, function (Faker\Generator $faker) {
    return [
        "titre" => $faker->name,
        "description" => $faker->name,
    ];
});
