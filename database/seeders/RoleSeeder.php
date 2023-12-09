<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $countryManager = Role::create(['name' => 'Country Manager']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-countrie',
            'edit-countrie',
            'delete-countrie'
        ]);

        $countryManager->givePermissionTo([
            'create-countrie',
            'edit-countrie',
            'delete-countrie'
        ]);
    }
}