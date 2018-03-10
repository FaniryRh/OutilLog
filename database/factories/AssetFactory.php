<?php

$factory->define(App\Asset::class, function (Faker\Generator $faker) {
    return [
        "category_id" => factory('App\AssetsCategory')->create(),
        "serial_number" => $faker->name,
        "title" => $faker->name,
        "date_acquisition" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "quantite_stock" => $faker->randomNumber(2),
        "status_id" => factory('App\AssetsStatus')->create(),
        "location_id" => factory('App\AssetsLocation')->create(),
        "assigned_user_id" => factory('App\PersonnelDuBngrc')->create(),
        "notes" => $faker->name,
        "latitude" => $faker->name,
        "longitude" => $faker->name,
    ];
});
