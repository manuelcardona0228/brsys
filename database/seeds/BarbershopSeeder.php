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
            $barber->department_id = 2;
            //$barber->city_id =;
            $barber->barbershop_administrator_id = 1;
            $barber->save();
    }
}
