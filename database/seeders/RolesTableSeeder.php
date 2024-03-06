<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Role::factory()->count(5)->create();

        $permission = new Permission();
        $permission->name = 'create-event';
        $permission->save();

        $role = new Role();
        $role->name = 'admin';
        $role->save();
        $role->permissions()->attach($permission);
        $permission->roles()->attach($role);

        $role = new Role();
        $role->name = 'organizer';
        $role->save();
        $role->permissions()->attach($permission);
        $permission->roles()->attach($role);

        $permission = new Permission();
        $permission->name = 'create-user';
        $permission->save();

        $role = new Role();
        $role->name = 'spectator';
        $role->save();
        $role->permissions()->attach($permission);
        $permission->roles()->attach($role);

        $admin = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'spectator')->first();
        $create_post = Permission::where('name', 'create-post')->first();
        $create_user = Permission::where('name', 'create-user')->first();

        $adminUser = new User();
        $adminUser->firstname = 'Admin';
        $adminUser->lastname = 'Admin';
        $adminUser->email = 'admin1@example.com';
        $adminUser->password = bcrypt('admin');
        $adminUser->save();
        $adminUser->roles()->attach($admin->id);
        $admin->permissions()->attach($create_post);

        $user = new User();
        $user->firstname = 'User';
        $user->lastname = 'User';
        $user->email = 'user1@gmail.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($userRole->id);
        $user->permissions()->attach($create_user);
    }
}
