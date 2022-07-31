<?php

namespace Database\Seeders;

use App\Models\Reason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reason::create(['id' => '27', 'name' => 'TRABAJO', 'code' => 'TYP_TRABAJO', 'description' => 'TRABAJO']);
        Reason::create(['id' => '16', 'name' => 'TURÍSMO', 'code' => 'TYP_TURISMO', 'description' => 'TURÍSMO']);
        Reason::create(['id' => '17', 'name' => 'ESTUDIOS', 'code' => 'TYP_ESTUDIOS', 'description' => 'ESTUDIOS']);
        Reason::create(['id' => '18', 'name' => 'VACACIONES', 'code' => 'TYP_VACACIONES', 'description' => 'VACACIONES']);
        Reason::create(['id' => '21', 'name' => 'FAMILIA', 'code' => 'TYP_FAMILIA', 'description' => 'FAMILIA']);
        Reason::create(['id' => '28', 'name' => 'NEGOCIOS', 'code' => 'TYP_NEGOCIOS', 'description' => 'NEGOCIOS']);
        Reason::create(['id' => '639', 'name' => 'OTROS', 'code' => 'TYP_OTROS', 'description' => 'OTROS']);

    }
}
