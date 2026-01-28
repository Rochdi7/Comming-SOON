<?php

namespace Database\Seeders;

use App\Models\Agency;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AgencyUserSeeder extends Seeder
{
    public function run(): void
    {
        // Agencies (update or create)
        $agency1 = Agency::updateOrCreate(
            ['email' => 'contact@agency1.com'],
            [
                'name' => 'Agency Demo 1',
                'legal_name' => 'Agency Demo 1 SARL',
                'phone' => '+212600000001',
                'address' => '123 Rue Demo 1',
                'city' => 'Casablanca',
                'country' => 'Morocco',
            ]
        );

        $agency2 = Agency::updateOrCreate(
            ['email' => 'contact@agency2.com'],
            [
                'name' => 'Agency Demo 2',
                'legal_name' => 'Agency Demo 2 SARL',
                'phone' => '+212600000002',
                'address' => '456 Rue Demo 2',
                'city' => 'Rabat',
                'country' => 'Morocco',
            ]
        );

        // Users (update or create)
        User::updateOrCreate(
            ['email' => 'admin@agency1.com'],
            [
                'agency_id' => $agency1->id,
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'phone' => '+212600000003',
                'status' => 'active',
            ]
        );

        User::updateOrCreate(
            ['email' => 'inactive@agency1.com'],
            [
                'agency_id' => $agency1->id,
                'name' => 'Inactive User',
                'password' => Hash::make('password123'),
                'phone' => '+212600000004',
                'status' => 'inactive',
            ]
        );

        User::updateOrCreate(
            ['email' => 'blocked@agency2.com'],
            [
                'agency_id' => $agency2->id,
                'name' => 'Blocked User',
                'password' => Hash::make('password123'),
                'phone' => '+212600000005',
                'status' => 'blocked',
            ]
        );

        $this->command?->info("Seed OK ✅");
        $this->command?->info("Login admin: admin@agency1.com / password123");
        $this->command?->info("Dashboard: /backoffice/dashboard");
        $this->command?->info("Demo login (optional): /backoffice/login/demo");
    }
}
