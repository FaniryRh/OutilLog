<?php

$factory->define(App\Region::class, function (Faker\Generator $faker) {
    return [
        "province_id" => factory('App\Province')->create(),
        "name" => $faker->name,
    ];
});
