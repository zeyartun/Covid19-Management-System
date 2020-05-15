<?php

use Illuminate\Database\Seeder;
use App\QCenter;

class QCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

       for ($i=0; $i < 1000; $i++) { 
       		$QCenter = new QCenter();
       		$QCenter->township_id = rand(1, 100);
            $QCenter->Qcenter_name = $faker->text('10');    
            $QCenter->bed_quantity = rand(20, 100);
            $QCenter->No_breakfast = rand(1, 100);
            $QCenter->No_lunch = rand(1, 100); 
            $QCenter->No_dinner = rand(1, 100); 
            $QCenter->save();
       }
    }
}
