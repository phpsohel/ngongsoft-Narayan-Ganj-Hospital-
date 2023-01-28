<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit member']);
        Permission::create(['name' => 'update member']);
        Permission::create(['name' => 'view member']);
        Permission::create(['name' => 'delete member']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'editor']);
        $role1->givePermissionTo('edit member');
        $role1->givePermissionTo('view member');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit member');     
        $role2->givePermissionTo('update member');
        $role2->givePermissionTo('view member');
        $role2->givePermissionTo('delete member');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user =  \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'super admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        $user->assignRole($role2);

        $user =  \App\Models\User::factory()->create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        $user->assignRole($role3);
    }
}