<?php

$factory->define(App\ContactDistrict::class, function (Faker\Generator $faker) {
    return [
        "district_id" => factory('App\District')->create(),
        "nom_prenom" => $faker->name,
        "organisme_id" => factory('App\ContactCompany')->create(),
        "fonction" => $faker->name,
        "tel" => $faker->name,
        "email" => $faker->name,
    ];
});
