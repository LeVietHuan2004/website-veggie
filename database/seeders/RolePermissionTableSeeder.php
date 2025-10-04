<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $staffRole = Role::where('name', 'staff')->first();
        
        $permissions = Permission::all();

        // Assign all permissions to admin role
        $adminRole->permissions()->sync($permissions);

        // Assign specific permissions to staff role
        $staffPermissions = $permissions->whereIn('name', [
         'manage_products',
         'manage_contacts'
        ]
    );
        $staffRole->permissions()->sync($staffPermissions); 
        
    }
}