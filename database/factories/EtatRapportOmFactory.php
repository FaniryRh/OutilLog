<?php

$factory->define(App\EtatRapportOm::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
    ];
});
