<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin
        $admin = User::create([
            'name' => env('SU_NAME'),
            'email' => env('SU_EMAIL'),
            'password' => Hash::make(env('SU_PASSWORD')),
        ]);

        // Assign role
        $admin->assignRole('admin');
    }
}
