<?php

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        "company_id" => factory('App\ContactCompany')->create(),
        "fonction" => $faker->name,
        "first_name" => $faker->name,
        "phone1" => $faker->name,
        "phone2" => $faker->name,
        "email" => $faker->name,
        "address" => $faker->name,
    ];
});
