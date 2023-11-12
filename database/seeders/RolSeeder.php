<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->delete();
        // DB::table('permissions')->delete();

        $role1 = Role::firstOrCreate(['name' => 'Admin']);
        $role2 = Role::firstOrCreate(['name' => 'Editor']);

        Permission::firstOrCreate(['name' => 'users.index'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'users.create'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'users.edit'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'users.delete'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'roles.index'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'roles.create'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'roles.edit'])->syncRoles([$role1]);
        Permission::firstOrCreate(['name' => 'roles.delete'])->syncRoles([$role1]);
    }
}
