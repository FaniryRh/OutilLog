<?php

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        "type_id" => factory('App\TypeTache')->create(),
        "mission_id" => factory('App\Mission')->create(),
        "name" => $faker->name,
        "description" => $faker->name,
        "status_id" => factory('App\TaskStatus')->create(),
        "due_date" => $faker->date("d-m-Y", $max = 'now'),
        "heur" => $faker->date("H:i:s", $max = 'now'),
        "user_id" => factory('App\PersonnelDuBngrc')->create(),
    ];
});
