<?php

$factory->define(App\CompetanceFormation::class, function (Faker\Generator $faker) {
    return [
        "titre" => $faker->name,
        "description" => $faker->name,
    ];
});
