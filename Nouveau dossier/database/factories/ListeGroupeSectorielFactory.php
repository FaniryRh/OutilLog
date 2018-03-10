<?php

$factory->define(App\ListeGroupeSectoriel::class, function (Faker\Generator $faker) {
    return [
        "groupe_sectoriel_id" => factory('App\GroupeSectoriel')->create(),
        "nom_prenom" => $faker->name,
        "organisme_id" => factory('App\ContactCompany')->create(),
        "fonction" => $faker->name,
        "tel" => $faker->name,
        "email" => $faker->name,
    ];
});
