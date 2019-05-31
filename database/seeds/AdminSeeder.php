<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\Admin;
        $admin->username = "admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt(123456);
        $admin->name = "admin";
        $admin->active = 1;
        $admin->save();
    }
}
