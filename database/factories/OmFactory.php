<?php

$factory->define(App\Om::class, function (Faker\Generator $faker) {
    return [
        "mission_id" => factory('App\Mission')->create(),
        "ordonnee_a_id" => factory('App\PersonnelDuBngrc')->create(),
        "destination" => $faker->name,
        "itineraire" => $faker->name,
        "depart" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "duree" => $faker->randomNumber(2),
        "etat_id" => factory('App\EtatOm')->create(),
        "remise_rapport" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "etat_rapport_de_mission_id" => factory('App\EtatRapportOm')->create(),
    ];
});
