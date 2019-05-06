<?php

use Illuminate\Database\Seeder;
use App\User;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barber = new User();
        $barber->name = 'Jose Augusto';
        $barber->lastName = 'Rodriguez Lopez';
        $barber->phone = '3024509845';
        $barber->birthdate = '1976-02-23';
        //$barber->address = '';
        $barber->email = 'joseAug@gmail.com';
        $barber->nameUser = 'joserod0223';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 1;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'David Santiago';
        $barber->lastName = 'Garcia Arias';
        $barber->phone = '3124509845';
        $barber->birthdate = '1990-06-23';
        //$barber->address = '';
        $barber->email = 'david_gara23@gmail.com';
        $barber->nameUser = 'dagara23';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 1;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Cristian';
        $barber->lastName = 'Segura Gonzales';
        $barber->phone = '3156709845';
        $barber->birthdate = '1995-04-29';
        //$barber->address = '';
        $barber->email = 'cristian-segu29@gmail.com';
        $barber->nameUser = 'cristiang29';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 2;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Juliana';
        $barber->lastName = 'Martinez Lopez';
        $barber->phone = '3224569845';
        $barber->birthdate = '1980-06-13';
        //$barber->address = '';
        $barber->email = 'julimalop@gmail.com';
        $barber->nameUser = 'julianita0613';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 3;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'David';
        $barber->lastName = 'Perez Lopez';
        $barber->phone = '3024345845';
        $barber->birthdate = '1969-10-05';
        //$barber->address = '';
        $barber->email = 'davidperezl@gmail.com';
        $barber->nameUser = 'davidlop1';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 3;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Mateo';
        $barber->lastName = 'Torres Vargas';
        $barber->phone = '3134560956';
        $barber->birthdate = '1975-11-28';
        //$barber->address = '';
        $barber->email = 'mattorres28@gmail.com';
        $barber->nameUser = 'mattorres';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 4;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Valentina';
        $barber->lastName = 'Lopez Rojas';
        $barber->phone = '3024509845';
        $barber->birthdate = '1994-01-02';
        //$barber->address = '';
        $barber->email = 'valenRoj_02@gmail.com';
        $barber->nameUser = 'valenroj02';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 5;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Sandra';
        $barber->lastName = 'Moreno Diaz';
        $barber->phone = '3505233412';
        $barber->birthdate = '1992-08-24';
        //$barber->address = '';
        $barber->email = 'sandrita-0824@gmail.com';
        $barber->nameUser = 'sandris08';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 5;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Camila';
        $barber->lastName = 'Gutierrez Ramirez';
        $barber->phone = '3208903456';
        $barber->birthdate = '1990-06-30';
        //$barber->address = '';
        $barber->email = 'camiguti@hotmail.com';
        $barber->nameUser = 'camiguti093';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 1;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Carlos Andres';
        $barber->lastName = 'Lopez Gutierrez';
        $barber->phone = '3004567890';
        $barber->birthdate = '1985-06-28';
        //$barber->address = '';
        $barber->email = 'andreslop06@gmail.com';
        $barber->nameUser = 'andrescar85';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 2;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Andres';
        $barber->lastName = 'Franco Arcila';
        $barber->phone = '3238605129';
        $barber->birthdate = '1991-02-03';
        //$barber->address = '';
        $barber->email = 'andresfranar@hotmail.com';
        $barber->nameUser = 'andres9102';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 3;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();

        $barber = new User();
        $barber->name = 'Maria Andrea';
        $barber->lastName = 'Londoño Serna';
        $barber->phone = '3053450923';
        $barber->birthdate = '1996-08-15';
        //$barber->address = '';
        $barber->email = 'andrelondoño_08@gmail.com';
        $barber->nameUser = 'andre15';
        $barber->password = Hash::make('hola123');
        $barber->type_user_id = 3;
        $barber->headquarter_id = 4;
        $barber->longitude = 7.23;
        $barber->latitude = 8.34;
        $barber->save();
    }
}
