<?php

$factory->define(App\Reunion::class, function (Faker\Generator $faker) {
    return [
        "objet" => $faker->name,
        "date" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "personnel_id" => factory('App\PersonnelDuBngrc')->create(),
        "description" => $faker->name,
    ];
});
