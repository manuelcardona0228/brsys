<?php

use Illuminate\Database\Seeder;
use App\Barbershop;

class BarbershopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $barber = new Barbershop();
            $barber->nit  = '15957458';
            $barber->businessName = 'Barba Roja';
            $barber->address = 'calle 12 # 4A-49';
            $barber->email = 'barbaroa0229@hotmail.com';
            $barber->phone = '321980670';
            $barber->website = 'N/A';
            //$barber->department_id = 2;
            //$barber->city_id =;
            $barber->save();


            $barber = new Barbershop();
            $barber->nit  = '1010215716';
            $barber->businessName = 'Versace';
            $barber->address = 'Carrera 23 # 49-23';
            $barber->email = 'clubVersace@gmail.com';
            $barber->phone = '3124560986';
            $barber->website = 'N/A';
            //$barber->department_id = 2;
            //$barber->city_id =;
            $barber->save();


            $barber = new Barbershop();
            $barber->nit  = '1059814262';
            $barber->businessName = 'Barberia Del Centro';
            $barber->address = 'Calle 19 # 23-34';
            $barber->email = 'barberiaDelCentro@gmail.com';
            $barber->phone = '3230982345';
            $barber->website = 'N/A';
            //$barber->department_id = 2;
            //$barber->city_id =;
            $barber->save();

            $barber = new Barbershop();
            $barber->nit  = '1010215716';
            $barber->businessName = 'Leñador Barbershop';
            $barber->address = 'Calle 64 #27c 37';
            $barber->email = 'leñadorBarbershop@gmail.com';
            $barber->phone = '3158690845';
            $barber->website = 'N/A';
            //$barber->department_id = 2;
            //$barber->city_id =;
            $barber->save();

            $barber = new Barbershop();
            $barber->nit  = '1010215716';
            $barber->businessName = 'Vintage Barberia';
            $barber->address = 'Calle 63 # 24-13';
            $barber->email = 'clubVintage@gmail.com';
            $barber->phone = '3146092827';
            $barber->website = 'N/A';
            //$barber->department_id = 2;
            //$barber->city_id =;
            $barber->save();
    }
}
