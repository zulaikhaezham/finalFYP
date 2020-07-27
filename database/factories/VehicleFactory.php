<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use App\Student;
use App\Contractor;
use App\Staff;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'plate_no' => $faker->name,
        'type' => 'car',
        'model' => 'Honda', 
        'color' => $faker->colorName,
        'upload_docs' => Str::random(10),
        'student_id' => factory(Student::class),
        'staff_id' => factory(Staff::class),
        'contractor_id' => factory(Contractor::class),
    ];
});