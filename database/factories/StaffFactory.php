<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'staff_no' => $faker->unique()->randomNumber(4),
        'password' => Hash::make('1234567'),
        'name' => $faker->firstName,
        'ic_passport' => $faker->randomNumber(5),
        'address' => $faker->address,
        'postcode' => $faker->Postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'dept' => 'ICT',
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});