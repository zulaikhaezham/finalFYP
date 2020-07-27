<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'matric_no' => $faker->unique()->randomNumber(5),
        'password' => Hash::make('1234567'),
        'name' => $faker->firstName,
        'ic_passport' => $faker->randomNumber(5),
        'kuliyyah' => 'ICT',
        'level' => $faker->numberBetween(1,4),
        'address' => $faker->address,
        'postcode' => $faker->Postcode,
        'city' => $faker->city,
        'state'=> $faker->state,
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->email,     
    ];
});
