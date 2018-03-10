<?php

$factory->define(App\EtatImpression::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
