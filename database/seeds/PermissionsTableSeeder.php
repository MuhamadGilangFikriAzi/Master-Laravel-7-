<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $access = ['User', 'Role', 'Permission'];

        $permissions = ['Index', 'Create', 'Read', 'Update', 'Delete'];

        // Membuat Permission
        foreach ($access as $acc) {
            foreach ($permissions as $permission) {
                DB::table('permissions')->insert([
                    'name' => $permission . ' ' . $acc,
                    'guard_name' => 'web',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                $settings[] = $permission . ' ' . $acc;
            }
        }

        // Memberikan hak permission kepada Role Super Admin
        $permissionsList =  DB::table('permissions')->get()->toArray();

        foreach ($permissionsList as $pl) {
            DB::table('role_has_permissions')->insert([
                'role_id' => 1,
                'permission_id' => $pl->id,
            ]);
        }

        // Memberikan hak akses kepada Role Admin
        foreach ($settings as $setting) {
            $id = DB::table('permissions')->where('name', $setting)->first()->id;

            DB::table('role_has_permissions')->insert([
                'role_id' => 2,
                'permission_id' => $id,
            ]);
        }
    }
}
