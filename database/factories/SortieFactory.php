<?php

$factory->define(App\Sortie::class, function (Faker\Generator $faker) {
    return [
        "parsonnel_id" => factory('App\PersonnelDuBngrc')->create(),
        "stock_id" => factory('App\ListeStock')->create(),
        "quantite" => $faker->randomFloat(2, 1, 100),
        "unite" => $faker->name,
        "motif" => $faker->name,
        "mission_id" => factory('App\Mission')->create(),
        "date" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "dateheurfin" => $faker->date("d-m-Y", $max = 'now'),
        "statut_id" => factory('App\StatusSortie')->create(),
        "reponsable_sortie" => $faker->name,
    ];
});
