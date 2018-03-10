<?php

$factory->define(App\ListeDesPrefet::class, function (Faker\Generator $faker) {
    return [
        "province_id" => factory('App\Province')->create(),
        "region_id" => factory('App\Region')->create(),
        "prefecture_id" => factory('App\Prefecture')->create(),
        "nom_prenom" => $faker->name,
        "tel1" => $faker->name,
        "tel2" => $faker->name,
        "email" => $faker->safeEmail,
    ];
});
