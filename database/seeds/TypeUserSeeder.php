<?php

use Illuminate\Database\Seeder;
use App\TypeUser;


class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = new TypeUser();
        $type_user->name = 'System Administrator';
        $type_user->description = 'Vista global de todas las entidades';
        $type_user->save();

        $type_user = new TypeUser();
        $type_user->name = 'Barbershop Administrator';
        $type_user->description = 'Vista global de las entidades propias';
        $type_user->save();

        $type_user = new TypeUser();
        $type_user->name = 'Barber';
        $type_user->description = 'Vista solo de algunas funciones basicas';
        $type_user->save();

        $type_user = new TypeUser();
        $type_user->name = 'Customer';
        $type_user->description = 'Vista solo de algunas funciones basicas';
        $type_user->save();
    }
}
