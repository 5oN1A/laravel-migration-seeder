<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            
       $newPackage = new Package();
       $newPackage->title=$faker->sentence(6, true);
       $newPackage->destination=$faker->city;
       $newPackage->hotel_name=$faker->company;
       $newPackage->hotel_stars=$faker->biasedNumberBetween(1, 5, 'sqrt');
       $newPackage->airline_name=$faker->company;
       $newPackage->start=$faker->date('Y-m-d', 'now');
       $newPackage->end=$faker->date('Y-m-d', 'now');
       $newPackage->description=$faker->realText(100, 2);
       $newPackage->amount=$faker->biasedNumberBetween(500, 3000, 'sqrt');
       $newPackage->save();


    }
}
}
