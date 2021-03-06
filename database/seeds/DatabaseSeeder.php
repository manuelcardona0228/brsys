<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TypeUserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(BarbershopSeeder::class);
        $this->call(BarbershopAdminSeeder::class);
        $this->call(HeadquarterSeeder::class);
        $this->call(BarberSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(SystemAdminSeeder::class);
    }
}
