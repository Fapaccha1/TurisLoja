<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'id' => '22',
            'name' => 'VILCABAMBA',
            'address' => 'VILCABAMBA',
            'code' => 'TYP_VILCABAMBA',
            'description' => 'VILCABAMBA'
        ]);
        Place::create([
            'id' => '647',
            'name' => 'PUERTA DE LA CIUDAD',
            'address' => 'PUERTA DE LA CIUDAD',
            'code' => 'TYP_PUERTA',
            'description' => 'PUERTA DE LA CIUDAD'
        ]);
        Place::create([
            'id' => '640',
            'name' => 'TERMINAL TERRESTRE',
            'address' => 'TERMINAL TERRESTRE',
            'code' => 'TYP_TERMINAL',
            'description' => 'TERMINAL TERRESTRE'
        ]);
        Place::create([
            'id' => '24',
            'name' => 'CENTRAL',
            'address' => 'CENTRAL',
            'code' => 'TYP_CENTRAL',
            'description' => 'CENTRAL'
        ]);
    }
}
