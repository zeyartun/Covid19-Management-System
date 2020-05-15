<?php

use Illuminate\Database\Seeder;
use App\patient;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $gen = ['male','female'];
       for ($i=0; $i < 100; $i++) { 
       		$patient = new patient();
       		$patient->Qcenter_ID = rand(1, 1000);
            $patient->patient_name = $faker->name;  
            $patient->patient_ph = rand(40000000, 90000000);
            $patient->patient_address = $faker->text('30');   
            $patient->patient_age = rand(1, 70);
            $patient->patient_gender = $gen[rand(0,1)]; 
            $patient->Q_at = now();   
            $patient->Q_end = now()->addDays(14); 
            $patient->save();
       }
    }
}
