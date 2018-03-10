<?php

$factory->define(App\ListeStock::class, function (Faker\Generator $faker) {
    return [
        "designation" => $faker->name,
        "description" => $faker->name,
        "quantite" => $faker->randomFloat(2, 1, 100),
        "unite_id" => factory('App\Unite')->create(),
    ];
});
