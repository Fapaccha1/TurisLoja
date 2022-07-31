<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuario Super Admin',
            'email' => 'super@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'// password
        ])->assignRole('Super Admin');

        User::create([
            'name' => 'Usuario Admin Museo1',
            'email' => 'admin1@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'// password
        ])->assignRole('Admin Museo');

        User::create([
            'name' => 'Usuario Admin Museo2',
            'email' => 'admin2@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'// password
        ])->assignRole('Admin Museo');

        User::create([
            'name' => 'Usuario Admin Museo3',
            'email' => 'admin3@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'// password
        ])->assignRole('Admin Museo');
/* 
        User::create([
            'name' => 'Usuario Encuestador',
            'email' => 'encuestador@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'// password
        ])->assignRole('Encuestador'); */
    }
}
