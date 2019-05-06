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
        $admin->barbershop_id = 2;
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
        $admin->barbershop_id = 1;
        $admin->type_user_id = 2;
        $admin->longitude = 6.45;
        $admin->latitude = 7.23;
        $admin->save();

        $admin = new User();
        $admin->name = 'Jose Adolfo';
        $admin->lastName = 'Melo Lopez';
        $admin->phone = '3105609854';
        $admin->birthdate = '1956-03-26';
        $admin->email = 'joseolfo45@hotmail.com';
        $admin->nameUser = 'adolfojose';
        $admin->password = Hash::make('hola123');
        $admin->barbershop_id = 3;
        $admin->type_user_id = 2;
        $admin->longitude = 6.45;
        $admin->latitude = 7.23;
        $admin->save();

        $admin = new User();
        $admin->name = 'Cristina';
        $admin->lastName = 'Arias Muñoz';
        $admin->phone = '3109834043';
        $admin->birthdate = '1980-11-13';
        $admin->email = 'crintinaar@gmail.com';
        $admin->nameUser = 'critinas1113';
        $admin->password = Hash::make('hola123');
        $admin->barbershop_id = 5;
        $admin->type_user_id = 2;
        $admin->longitude = 6.45;
        $admin->latitude = 7.23;
        $admin->save();

        $admin = new User();
        $admin->name = 'Felipe';
        $admin->lastName = 'Cortes Morales';
        $admin->phone = '3239342345';
        $admin->birthdate = '1987-12-03';
        $admin->email = 'felipeCortes@gmail.com';
        $admin->nameUser = 'felipMo12';
        $admin->password = Hash::make('hola123');
        $admin->barbershop_id = 4;
        $admin->type_user_id = 2;
        $admin->longitude = 6.45;
        $admin->latitude = 7.23;
        $admin->save();

    }
}
