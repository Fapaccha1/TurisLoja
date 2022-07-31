<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Transport::create(['id' => '638', 'name' => 'OTRO', 'code' => 'TYP_OTRO', 'description' => 'OTRO']);
        Transport::create(['id' => '25', 'name' => 'BUS', 'code' => 'TYP_BUS', 'description' => 'BUS']);
        Transport::create(['id' => '13', 'name' => 'AVIÓN', 'code' => 'TYP_AVION', 'description' => 'AVIÓN']);
        Transport::create(['id' => '14', 'name' => 'MOTO', 'code' => 'TYP_MOTO', 'description' => 'MOTO']);
        Transport::create(['id' => '637', 'name' => 'BARCO', 'code' => 'TYP_BARCO', 'description' => 'BARCO']);
        Transport::create(['id' => '636', 'name' => 'BICICLETA', 'code' => 'TYP_BICICLETA', 'description' => 'BICICLETA']);
        Transport::create(['id' => '15', 'name' => 'TAXI', 'code' => 'TYP_TAXI', 'description' => 'TAXI']);

    }
}
