<?php

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
        $role_admin = Role::create(['name' => 'admin']);
        $role_employee = Role::create(['name' => 'employee']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role_admin, $role_employee]);

        // Sección de usuarios
        Permission::create(['name' => 'admin.users.index'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.users.edit'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($role_admin);

        // Sección de encuestas
        Permission::create(['name' => 'admin.surveys.index'])->syncRoles([$role_admin, $role_employee]);
        Permission::create(['name' => 'admin.surveys.show'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.surveys.stats'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.surveys.create'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.surveys.edit'])->assignRole($role_admin);
        Permission::create(['name' => 'admin.surveys.destroy'])->assignRole($role_admin);

    }
}
