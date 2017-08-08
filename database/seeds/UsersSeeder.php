<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat role member 
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Membuat sample admin
        $admin = new User();
        $admin->name ='Admin SeconMobil';
        $admin->email = 'admin@mobil.com';
        $admin->password = bcrypt('mobilsecond');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample member
        $member = new User();
        $member->name = "Sample Member";
        $member->email = "member@mobil.com";
        $member->password = bcrypt('mobilsecond');
        $member->save();
        $member->attachRole($memberRole);
    }
}
