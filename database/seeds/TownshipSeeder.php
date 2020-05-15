<?php

use Illuminate\Database\Seeder;
use App\Township;

class TownshipSeeder extends Seeder
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
       		$Township = new Township();
       		$Township->city_id = rand(1, 14);
            $Township->township_name = $faker->text('10');          
            $Township->save();
       }
    }
}
