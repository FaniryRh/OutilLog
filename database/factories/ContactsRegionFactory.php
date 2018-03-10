<?php

$factory->define(App\ContactsRegion::class, function (Faker\Generator $faker) {
    return [
        "region_id" => factory('App\Region')->create(),
        "nom_prenom" => $faker->name,
        "organisme_id" => factory('App\ContactCompany')->create(),
        "fonction" => $faker->name,
        "tel" => $faker->name,
        "email" => $faker->name,
    ];
});
