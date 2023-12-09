<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'prince savaliya', 
            'email' => 'princesavaliya@gmail.com',
            'password' => Hash::make('prince@1122')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'harsh makwana', 
            'email' => 'harshmakwana@gmail.com',
            'password' => Hash::make('harsh@1122')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $countryManager = User::create([
            'name' => 'dhruv tadhani', 
            'email' => 'dhruvtadhani@gmail.com',
            'password' => Hash::make('dhruv@1122')
        ]);
        $countryManager->assignRole('Country Manager');
    }
}