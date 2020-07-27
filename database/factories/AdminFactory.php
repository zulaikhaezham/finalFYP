<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'admin_no' => $faker->unique()->randomNumber(4),
        'password' => Hash::make('1234567'),
        
    ];
});
