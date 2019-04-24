<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class BarbershopAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Wilmar fredy';
        $admin->lastName = 'Cardona Frando';
        $admin->phone = '3105800990';
        $admin->birthdate = '1970-03-02';
        $admin->email = 'wilmafre@gmail.com';
        $admin->nameUser = 'fredy970';
        $admin->password = Hash::make('hola1234');
        $admin->type_user_id = 2;
        $admin->longitude = 7.23;
        $admin->latitude = 8.34;
        $admin->save();

        $admin = new User();
        $admin->name = 'Juan Carlos';
        $admin->lastName = 'Meza Morales';
        $admin->phone = '3109858023';
        $admin->birthdate = '1985-06-23';
        $admin->email = 'juancarlosmemo@hotmail.com';
        $admin->nameUser = 'juancarlos0623';
        $admin->password = Hash::make('juan1234');
        $admin->type_user_id = 2;
        $admin->longitude = 6.45;
        $admin->latitude = 7.23;
        $admin->save();
    }
}
