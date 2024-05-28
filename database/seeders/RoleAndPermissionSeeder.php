<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'index task']);
        Permission::create(['name' => 'show task']);
        Permission::create(['name' => 'create task']);
        Permission::create(['name' => 'edit task']);
        Permission::create(['name' => 'delete task']);


        $user = Role::create(['name' => 'user'])
        ->givePermissionTo(['index task', 'show task', 'create task', 'edit task', 'delete task']);

        $admin = Role::create(['name' => 'admin'])
        ->givePermissionTo(Permission::all());
    }
}
