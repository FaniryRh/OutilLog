<?php

$factory->define(App\Sortie::class, function (Faker\Generator $faker) {
    return [
        "stock_id" => factory('App\ListeStock')->create(),
        "quantite" => $faker->randomFloat(2, 1, 100),
        "unite" => $faker->name,
        "motif" => $faker->name,
        "date" => $faker->date("d-m-Y H:i:s", $max = 'now'),
    ];
});
