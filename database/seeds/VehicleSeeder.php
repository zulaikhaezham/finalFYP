<?php

use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vehicle::class, 5)->create(['staff_id'=> 1, 'student_id' => 1, 'contractor_id' => 1]);
    }
}
