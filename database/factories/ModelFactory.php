<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Game::class, function (Faker\Generator $faker) {
  
    return [
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'name' => $faker->name,
        'description' => $faker->text,
 	

    ];
});
