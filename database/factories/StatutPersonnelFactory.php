<?php

$factory->define(App\StatutPersonnel::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
    ];
});
