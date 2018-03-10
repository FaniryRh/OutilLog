<?php

$factory->define(App\Entree::class, function (Faker\Generator $faker) {
    return [
        "date" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "stock_id" => factory('App\ListeStock')->create(),
        "quantite" => $faker->randomFloat(2, 1, 100),
        "unite" => $faker->name,
        "motif" => $faker->name,
    ];
});
