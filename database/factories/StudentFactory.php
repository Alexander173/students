<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->defineAS(App\Models\Student::class, 'marks', function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'patronymic' => $faker->firstName,
        'date_of_birthday' => $faker->dateTimeBetween('-30 years', '-15 years')->format('Y-m-d'),
        'group_id' => $faker->randomElement(App\Models\Group::pluck('id')->toArray()),
    ];
});
