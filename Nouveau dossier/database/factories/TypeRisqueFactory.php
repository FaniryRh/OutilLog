<?php

$factory->define(App\TypeRisque::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
