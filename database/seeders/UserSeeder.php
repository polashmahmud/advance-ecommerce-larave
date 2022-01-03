<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        DB::table('users')->insert([
            'full_name' => 'Project Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'password'  => Hash::make('password'),
            'role'      => 'admin',
            'status'    => 'active'
        ]);

        // Vendor
        DB::table('users')->insert([
            'full_name' => 'Project Vendor',
            'username'  => 'vendor',
            'email'     => 'vendor@example.com',
            'password'  => Hash::make('password'),
            'role'      => 'vendor',
            'status'    => 'active'
        ]);

        // Customer
        DB::table('users')->insert([
            'full_name' => 'Project Customer',
            'username'  => 'customer',
            'email'     => 'customer@example.com',
            'password'  => Hash::make('password'),
            'role'      => 'customer',
            'status'    => 'active'
        ]);
    }
}
