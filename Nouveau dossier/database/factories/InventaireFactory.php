<?php

$factory->define(App\Inventaire::class, function (Faker\Generator $faker) {
    return [
        "date" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "mission_id" => factory('App\Mission')->create(),
        "stock_id" => factory('App\ListeStock')->create(),
        "quantite" => $faker->randomFloat(2, 1, 100),
        "unite" => $faker->name,
        "destination" => $faker->name,
        "latitude" => $faker->name,
        "longitude" => $faker->name,
    ];
});
