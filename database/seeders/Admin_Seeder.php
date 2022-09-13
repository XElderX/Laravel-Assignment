<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admin_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $admin = new \App\Models\User();
            $admin->name = "Admin";
            $admin->email = "admin@support.com";
            $admin->password = Hash::make('password');
            $admin->admin = 1;
            $admin->save();
        }
    }
}
