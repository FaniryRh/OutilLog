<?php

$factory->define(App\Mission::class, function (Faker\Generator $faker) {
    return [
        "objet" => $faker->name,
        "location" => $faker->name,
        "date_deb" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "date_fin" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "description" => $faker->name,
        "progression" => $faker->name,
        "stat_id" => factory('App\StatutMission')->create(),
        "latitude" => $faker->name,
        "longitude" => $faker->name,
    ];
});
