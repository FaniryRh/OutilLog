<?php

$factory->define(App\StatusSortie::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
    ];
});
