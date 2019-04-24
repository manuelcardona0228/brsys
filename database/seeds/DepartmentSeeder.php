<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Department();
        $department->name = 'Amazonas';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Antioquia';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Arauca';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Atlantico';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Bogotá';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Bolívar';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Boyacá';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Caldas';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Caquetá';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Cauca';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Cesar';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Córdoba';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Cundinamarca';
        $department->state =true;

        $department->save();

        $department = new Department();
        $department->name = 'Chocó';
        $department->state =true;

        $department->save();

        $department = new Department();
        $department->name = 'Huila';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'La Guajira';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Magdalena';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Meta';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Nariño';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Norte De Santander';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Quindio';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Risaralda';
        $department->state =true;

        $department->save();

        $department = new Department();
        $department->name = 'Santander';
        $department->state =true;

        $department->save();

        $department = new Department();
        $department->name = 'Sucre';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Tolima';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Valle Del cauca';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Casanare';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Putumayo';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Archipielago De San Andrés, Providencia Y Santa Catalina';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Guainía';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Guaviare';
        $department->state =true;

        $department->save();

        $department = new Department();
        $department->name = 'Vaupés';
        $department->state = true;
        $department->save();

        $department = new Department();
        $department->name = 'Vichada';
        $department->state = true;
        $department->save();

    }
}
