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

$factory->defineAS(App\Models\Subject::class, 'marks', function (Faker $faker) {
    return [
        'subject_name' => $faker->unique()->randomElement($array = array(
            'История',
            'Русский язык',
            'Математика'
            )),
    ];
});
