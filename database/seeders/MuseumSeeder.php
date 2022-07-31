<?php

namespace Database\Seeders;

use App\Models\Museum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuseumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $museum1 = Museum::create([
            'name' => 'Museo 1',
            'address' => 'calle primera y segunda',
            'description' => 'Museo de ...'
        ]);
        Museum::create([
            'name' => 'Museo 2',
            'address' => 'calle primera y segunda',
            'description' => 'Museo de ...'
        ]);
        $museum3 = Museum::create([
            'name' => 'Museo 3',
            'address' => 'calle primera y segunda',
            'description' => 'Museo de ...'
        ]);
        $museum4 = Museum::create([
            'name' => 'Museo 4',
            'address' => 'calle primera y segunda',
            'description' => 'Museo de ...'
        ]);

        $museum1->users()->attach(2);
        $museum3->users()->attach(4);
        $museum4->users()->attach(4);
    }
}
