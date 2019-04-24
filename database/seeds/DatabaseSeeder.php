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
        $this->call(BarbershopAdminSeeder::class);
        //$this->call(BarbershopSeeder::class);
        $this->call(SystemAdminSeeder::class);
    }
}
