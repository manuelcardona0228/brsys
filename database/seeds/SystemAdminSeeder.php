<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class SystemAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $admin = new User();
            $admin->name = 'Admin';
            $admin->lastName = 'BrSys';
            $admin->phone = '3104051587';
            $admin->email = 'brsyscontact@gmail.com';
            $admin->nameUser = 'brsysAdmin';
            $admin->password = Hash::make('hola123');
            $admin->type_user_id = 1;
            $admin->save();

    }
}
