<?php

$factory->define(App\ChefDeRegion::class, function (Faker\Generator $faker) {
    return [
        "province_id" => factory('App\Province')->create(),
        "region_id" => factory('App\Region')->create(),
        "nom_prenom" => $faker->name,
        "tel" => $faker->name,
        "tel2" => $faker->name,
        "email" => $faker->safeEmail,
    ];
});
