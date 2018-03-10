<?php

$factory->define(App\ChefDistrict::class, function (Faker\Generator $faker) {
    return [
        "region_id" => factory('App\Region')->create(),
        "district_id" => factory('App\District')->create(),
        "nom_prenom" => $faker->name,
        "tel1" => $faker->name,
        "tel2" => $faker->name,
        "email" => $faker->safeEmail,
    ];
});
