<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

       for ($i=0; $i < 100; $i++) { 
       		$Doctor = new Doctor();
       		$Doctor->q_center_id = rand(1, 1000);
            $Doctor->Doctor_name = $faker->name;  
            $Doctor->Doctor_ph = rand(40000000, 90000000);
            $Doctor->Doctor_address = $faker->text('30');
            $Doctor->save();
       }
    }
}
