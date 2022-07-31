<?php

namespace Database\Seeders;

use App\Models\MuseumRegister;
use App\Models\Survey;
use Database\Factories\SurveyFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory(1)->create(); */

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(TransportSeeder::class);
        $this->call(ReasonSeeder::class);
        $this->call(RegisterSeeder::class);
        $this->call(MuseumSeeder::class);

        Survey::factory(1000)->create();
        MuseumRegister::factory(100)->create();

    }
}
