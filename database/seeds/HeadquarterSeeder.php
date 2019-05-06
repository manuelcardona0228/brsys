<?php

use Illuminate\Database\Seeder;
use App\Headquarter;

class HeadquarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $headquarter = new Headquarter();
        $headquarter->nit  = '15957458';
        $headquarter->businessName = 'Barba Roja Laureles';
        $headquarter->address = 'carrera 21 # 45A-65';
        $headquarter->email = 'barbaroa0229@hotmail.com';
        $headquarter->phone = '321980672';
        $headquarter->barbershop_id = 1;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();


        $headquarter = new Headquarter();
        $headquarter->nit  = '15957458';
        $headquarter->businessName = 'Barba Roja Centro';
        $headquarter->address = 'calle 22 # 24-61';
        $headquarter->email = 'barbaroa0229@hotmail.com';
        $headquarter->phone = '321980673';
        $headquarter->barbershop_id = 1;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();

        $headquarter = new Headquarter();
        $headquarter->nit  = '15957458';
        $headquarter->businessName = 'Barba Roja Palermo';
        $headquarter->address = 'Carrera 20 # 65A-54';
        $headquarter->email = 'barbaroa0229@hotmail.com';
        $headquarter->phone = '321980674';
        $headquarter->barbershop_id = 1;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();
        

        $headquarter = new Headquarter();
        $headquarter->nit  = '1010215716';
        $headquarter->businessName = 'Versace';
        $headquarter->address = 'Carrera 23 # 49-23';
        $headquarter->email = 'clubVersace@gmail.com';
        $headquarter->phone = '3124560986';
        $headquarter->barbershop_id = 2;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();


        $headquarter = new Headquarter();
        $headquarter->nit  = '1059814262';
        $headquarter->businessName = 'Barberia Del Centro';
        $headquarter->address = 'Calle 19 # 23-34';
        $headquarter->email = 'barberiaDelCentro@gmail.com';
        $headquarter->phone = '3230982345';
        $headquarter->barbershop_id = 3;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();

        $headquarter = new Headquarter();
        $headquarter->nit  = '1010215716';
        $headquarter->businessName = 'Leñador Barbershop CC Mall Plaza';
        $headquarter->address = 'Barrio La Carola';
        $headquarter->email = 'leñadorBarbershop@gmail.com';
        $headquarter->phone = '3158690846';
        $headquarter->barbershop_id = 4;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();

        $headquarter = new Headquarter();
        $headquarter->nit  = '1010215716';
        $headquarter->businessName = 'Leñador Barbershop CC Fundadores';
        $headquarter->address = 'Centro Comercial Fundadores';
        $headquarter->email = 'leñadorBarbershop@gmail.com';
        $headquarter->phone = '3158690847';
        $headquarter->barbershop_id = 4;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();

        $headquarter = new Headquarter();
        $headquarter->nit  = '1010215716';
        $headquarter->businessName = 'Vintage Barberia Centro';
        $headquarter->address = 'Calle 19 # 34B-12';
        $headquarter->email = 'clubVintage@gmail.com';
        $headquarter->phone = '3146092828';
        $headquarter->barbershop_id = 5;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();

        $headquarter = new Headquarter();
        $headquarter->nit  = '1010215716';
        $headquarter->businessName = 'Vintage Barberia Minitas';
        $headquarter->address = 'Carrera 42 # 43A-56';
        $headquarter->email = 'clubVintage@gmail.com';
        $headquarter->phone = '3146092829';
        $headquarter->barbershop_id = 5;
        //$barber->department_id = 2;
        //$barber->city_id =;
        $headquarter->save();
    }
}
