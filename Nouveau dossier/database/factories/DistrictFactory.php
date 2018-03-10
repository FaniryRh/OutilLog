<?php

$factory->define(App\District::class, function (Faker\Generator $faker) {
    return [
        "region_id" => factory('App\Region')->create(),
        "name" => $faker->name,
    ];
});
