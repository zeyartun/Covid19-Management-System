<?php

use Illuminate\Database\Seeder;
use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 14; $i++) { 
            $City = new City();
            $City->city_name = $faker->text('10');          
            $City->save();
     }
    }
}
