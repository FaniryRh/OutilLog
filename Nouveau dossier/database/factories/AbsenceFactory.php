<?php

$factory->define(App\Absence::class, function (Faker\Generator $faker) {
    return [
        "personnel_id" => factory('App\PersonnelDuBngrc')->create(),
        "date" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "date_fin" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "motif" => $faker->name,
    ];
});
