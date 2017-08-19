<?php

use Illuminate\Database\Seeder;

use App\Funpacol\Entities\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'id' => 1,
            'name' => 'Barranquilla',
            'letter' => 'A',
            'slug'  => 'barranquilla',
            'state' => 1,
        ]);
        City::create([
            'id' => 2,
            'name' => 'Bogota',
            'letter' => 'b',
            'slug'  => 'bogota',
            'state' => 1,
        ]);
        City::create([
            'id' => 3,
            'name' => 'Cali',
            'letter' => 'c',
            'slug'  => 'cali',
            'state' => 1,
        ]);
        City::create([
            'id' => 4,
            'name' => 'Medellin',
            'letter' => 'd',
            'slug'  => 'medellin',
            'state' => 1,
        ]);
    }
}
