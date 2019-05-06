<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Servicios Barberia 1

        $service = new Service();
        $service->description = 'Solo corte de cabello';
        $service->value = 10000;
        $service->name = 'Corte';
        $service->barbershop_id = 1;
        $service->save();

        $service = new Service();
        $service->description = 'Solo barba';
        $service->value = 7000;
        $service->name = 'Barba';
        $service->barbershop_id = 1;
        $service->save();

        $service = new Service();
        $service->description = 'Corte de cabello + barba';
        $service->value = 14000;
        $service->name = 'Corte + Barba';
        $service->barbershop_id = 1;
        $service->save();

        $service = new Service();
        $service->description = 'Solo tratamiento capilar';
        $service->value = 13000;
        $service->name = 'Tratamiento Capilar';
        $service->barbershop_id = 1;
        $service->save();

        $service = new Service();
        $service->description = 'Solo tratamiento facial';
        $service->value = 15000;
        $service->name = 'Tratamiento Facial';
        $service->barbershop_id = 1;
        $service->save();

        $service = new Service();
        $service->description = 'Este incluye corte, barba y tratamiento facial';
        $service->value = 22000;
        $service->name = 'Servicio Vip';
        $service->barbershop_id = 1;
        $service->save();

        //Servicios Barberia 2

        $service = new Service();
        $service->description = 'Solo corte de cabello';
        $service->value = 10000;
        $service->name = 'Corte';
        $service->barbershop_id = 2;
        $service->save();

        $service = new Service();
        $service->description = 'Solo barba';
        $service->value = 7000;
        $service->name = 'Barba';
        $service->barbershop_id = 2;
        $service->save();

        $service = new Service();
        $service->description = 'Corte de cabello + barba';
        $service->value = 14000;
        $service->name = 'Corte + Barba';
        $service->barbershop_id = 2;
        $service->save();

        $service = new Service();
        $service->description = 'Solo tratamiento capilar';
        $service->value = 13000;
        $service->name = 'Tratamiento Capilar';
        $service->barbershop_id = 2;
        $service->save();

        $service = new Service();
        $service->description = 'Solo tratamiento facial';
        $service->value = 15000;
        $service->name = 'Tratamiento Facial';
        $service->barbershop_id = 2;
        $service->save();

        $service = new Service();
        $service->description = 'Este incluye corte, barba y tratamiento facial';
        $service->value = 22000;
        $service->name = 'Servicio Vip';
        $service->barbershop_id = 2;
        $service->save();

        //Servicios Barberia 3
        $service = new Service();
        $service->description = 'Solo corte de cabello';
        $service->value = 10000;
        $service->name = 'Corte';
        $service->barbershop_id = 3;
        $service->save();

        $service = new Service();
        $service->description = 'Solo barba';
        $service->value = 7000;
        $service->name = 'Barba';
        $service->barbershop_id = 3;
        $service->save();

        $service = new Service();
        $service->description = 'Corte de cabello + barba';
        $service->value = 14000;
        $service->name = 'Corte + Barba';
        $service->barbershop_id = 3;
        $service->save();

        //Servicios Barberia 4
        $service = new Service();
        $service->description = 'Solo corte de cabello';
        $service->value = 10000;
        $service->name = 'Corte';
        $service->barbershop_id = 4;
        $service->save();

        $service = new Service();
        $service->description = 'Solo barba';
        $service->value = 7000;
        $service->name = 'Barba';
        $service->barbershop_id = 4;
        $service->save();

        $service = new Service();
        $service->description = 'Corte de cabello + barba';
        $service->value = 14000;
        $service->name = 'Corte + Barba';
        $service->barbershop_id = 4;
        $service->save();

        $service = new Service();
        $service->description = 'Solo tratamiento facial';
        $service->value = 15000;
        $service->name = 'Tratamiento Facial';
        $service->barbershop_id = 4;
        $service->save();

        //Servicios Barberia 5
        $service = new Service();
        $service->description = 'Solo corte de cabello';
        $service->value = 10000;
        $service->name = 'Corte';
        $service->barbershop_id = 5;
        $service->save();

        $service = new Service();
        $service->description = 'Solo barba';
        $service->value = 7000;
        $service->name = 'Barba';
        $service->barbershop_id = 5;
        $service->save();

        $service = new Service();
        $service->description = 'Corte de cabello + barba';
        $service->value = 14000;
        $service->name = 'Corte + Barba';
        $service->barbershop_id = 5;
        $service->save();

        $service = new Service();
        $service->description = 'Solo tratamiento facial';
        $service->value = 15000;
        $service->name = 'Tratamiento Facial';
        $service->barbershop_id = 5;
        $service->save();

    }
}
