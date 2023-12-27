<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $sellerRole = Role::firstOrCreate(['name' => 'seller']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Permissions
        $permission = Permission::create(['name' => 'visible to register']);

        // Give Permission to Roles
        $userRole->givePermissionTo($permission);
        $sellerRole->givePermissionTo($permission);
    }
}
