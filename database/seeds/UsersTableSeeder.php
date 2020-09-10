<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('superadmin'),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@mail.com',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now()
        ]);
    }
}
