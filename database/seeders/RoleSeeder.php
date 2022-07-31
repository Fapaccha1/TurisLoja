<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Super Admin']);
        $role2 = Role::create(['name' => 'Admin Museo']);

        Permission::create(['name' => 'dashboard.home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'dashboard.places.index'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.gplaces.index'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.gdates.index'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.gmuseums.index'])->assignRole($role1);
        
        Permission::create(['name' => 'dashboard.users.index'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.users.create'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.users.edit'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.users.destroy'])->assignRole($role1);

        Permission::create(['name' => 'dashboard.museums.index'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.museums.create'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.museums.edit'])->assignRole($role1);
        Permission::create(['name' => 'dashboard.museums.destroy'])->assignRole($role1);

        Permission::create(['name' => 'dashboard.gsurveys.index'])->assignRole($role2);

        Permission::create(['name' => 'dashboard.survey.index'])->assignRole($role2);
        Permission::create(['name' => 'dashboard.survey.create'])->assignRole($role2);

        Permission::create(['name' => 'dashboard.registers.index'])->assignRole($role2);
        Permission::create(['name' => 'dashboard.registers.create'])->assignRole($role2);
        Permission::create(['name' => 'dashboard.registers.edit'])->assignRole($role2);

    }
}
