<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Car::create([
          'id' =>1,
           'name' => 'Bugatti',
           'photo'=> 'mobil01.jpg',
           'type_id'=> 1,
           'cost_per_day' => 6000,
           'year' => 1991,
           'license_plate' => 'S 41 SA',

        ]);

        Car::create([
          'id' =>2,
           'name' => 'Lambo',
           'photo'=> 'mobil02.jpg',
           'type_id'=> 2,
           'cost_per_day' => 7000,
           'year' => 2020,
           'license_plate' => 'N 1 HA',

        ]);

        Car::create([
          'id' =>3,
           'name' => 'Yaris',
           'photo'=> 'mobil03.jpg',
           'type_id'=> 3,
           'cost_per_day' => 5000,
           'year' => 2020,
           'license_plate' => 'SA 14 MAH',

        ]);

        Car::create([
          'id' =>4,
           'name' => 'Pajero',
           'photo'=> 'mobil04.jpg',
           'type_id'=> 4,
           'cost_per_day' => 5000,
           'year' => 2010,
           'license_plate' => '3 RNA W',

        ]);

                

           }
}
