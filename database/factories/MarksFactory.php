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

$factory->defineAS(App\Models\Mark::class, 'marks', function (Faker $faker) {
    return [
        'student_id' => $faker->randomElement(App\Models\Student::pluck('id')->toArray()),
        'subject_id' => $faker->randomElement(App\Models\Subject::pluck('id')->toArray()),
        'mark' => $faker->numberBetween($min = 2, $max = 5),
    ];
});
