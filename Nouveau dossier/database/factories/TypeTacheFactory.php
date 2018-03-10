<?php

$factory->define(App\TypeTache::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
    ];
});
