<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contractor;
use Faker\Generator as Faker;

$factory->define(Contractor::class, function (Faker $faker) {
    return [
        'contractor_no' => $faker->unique()->randomNumber(4),
        'password' => Hash::make('1234567'),
        'name' => $faker->firstName,
        'ic_passport' => $faker->randomNumber(5),
        'address' => $faker->address,
        'postcode' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'dept_company' => 'Daya Bersih',
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
