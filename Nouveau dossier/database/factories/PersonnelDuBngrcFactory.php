<?php

$factory->define(App\PersonnelDuBngrc::class, function (Faker\Generator $faker) {
    return [
        "fonction" => $faker->name,
        "nom_prenom" => $faker->name,
        "tel" => $faker->name,
        "tel2" => $faker->name,
        "email" => $faker->name,
        "adresse" => $faker->name,
        "date_embauche" => $faker->date("d-m-Y", $max = 'now'),
        "latitude" => $faker->name,
        "longitude" => $faker->name,
    ];
});
