<?php

$factory->define(App\EtatOm::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
    ];
});
