<?php

use Illuminate\Database\Seeder;
use App\User;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new User();
        $customer->name = 'Andres Felipe';
        $customer->lastName = 'Franco Morales';
        $customer->phone = '3239051456';
        $customer->birthdate = '1976-05-04';
        $customer->email = 'felipeand05@gmail.com';
        $customer->nameUser = 'felipe76';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Rafael';
        $customer->lastName = 'Muñoz Alzate';
        $customer->phone = '3223450987';
        $customer->birthdate = '1987-04-06';
        $customer->email = 'rafael04uñoz@gmail.com';
        $customer->nameUser = 'rafamuños87';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Alfonso';
        $customer->lastName = 'Gutierrez Ospina';
        $customer->phone = '3239051489';
        $customer->birthdate = '1978-03-09';
        $customer->email = 'gituerresalfonso09@gmail.com';
        $customer->nameUser = 'alfonsoguti78';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Victor';
        $customer->lastName = 'Vera Valencia';
        $customer->phone = '3156789854';
        $customer->birthdate = '1993-02-12';
        $customer->email = 'victorvera12@gmail.com';
        $customer->nameUser = 'victorval1202';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Santiago';
        $customer->lastName = 'Alvarez Arias';
        $customer->phone = '3239051567';
        $customer->birthdate = '1989-12-23';
        $customer->email = 'santiagoala23@gmail.com';
        $customer->nameUser = 'santi1223';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Andres David';
        $customer->lastName = 'Muñoz Ramirez';
        $customer->phone = '3239051456';
        $customer->birthdate = '1996-11-29';
        $customer->email = 'andresram1111@gmail.com';
        $customer->nameUser = 'davidmuñoz96';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Bryan';
        $customer->lastName = 'Garcia Perez';
        $customer->phone = '3233449056';
        $customer->birthdate = '1989-09-10';
        $customer->email = 'brygarcia10@gmail.com';
        $customer->nameUser = 'bryanperez09';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Juan Camilo';
        $customer->lastName = 'Agudelo Zapata';
        $customer->phone = '3239051123';
        $customer->birthdate = '1986-10-26';
        $customer->email = 'juancamilo_agu10@gmail.com';
        $customer->nameUser = 'juanca1026';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Martin';
        $customer->lastName = 'Martinez Serna';
        $customer->phone = '32390345908';
        $customer->birthdate = '1989-11-13';
        $customer->email = 'martinmserna13@gmail.com';
        $customer->nameUser = 'martinm11';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Bryan Estiben';
        $customer->lastName = 'Murcia Perez';
        $customer->phone = '3239053456';
        $customer->birthdate = '1990-08-29';
        $customer->email = 'estiben-murcia29@gmail.com';
        $customer->nameUser = 'bryanper29';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Sergio Andres';
        $customer->lastName = 'Marin Franco';
        $customer->phone = '3223467890';
        $customer->birthdate = '1998-03-23';
        $customer->email = 'chechomarin23@gmail.com';
        $customer->nameUser = 'sergiomarin03';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Fernando';
        $customer->lastName = 'Garcia Torres';
        $customer->phone = '3156787909';
        $customer->birthdate = '1992-12-11';
        $customer->email = 'fernando-garcia11@gmail.com';
        $customer->nameUser = 'fernandotorres12';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Kevin';
        $customer->lastName = 'Montoya Garcia';
        $customer->phone = '3123456789';
        $customer->birthdate = '1987-12-20';
        $customer->email = 'kevinM20@gmail.com';
        $customer->nameUser = 'kevin-g20';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Manuel David';
        $customer->lastName = 'Alzate Vargas';
        $customer->phone = '3156783456';
        $customer->birthdate = '1990-01-02';
        $customer->email = 'manuelvargas02@gmail.com';
        $customer->nameUser = 'manueldavid0102';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Alexander';
        $customer->lastName = 'Zapata Marin';
        $customer->phone = '3239056789';
        $customer->birthdate = '1989-04-23';
        $customer->email = 'alexanderzap23@gmail.com';
        $customer->nameUser = 'alex23';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Diego Alejandro';
        $customer->lastName = 'Lopez Marin';
        $customer->phone = '3210984567';
        $customer->birthdate = '1978-09-15';
        $customer->email = 'diegomlopez15@gmail.com';
        $customer->nameUser = 'diegol09';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Sebastian';
        $customer->lastName = 'Valencia Arcila';
        $customer->phone = '3206789807';
        $customer->birthdate = '1989-06-23';
        $customer->email = 'sebasv23@gmail.com';
        $customer->nameUser = 'sebasV23';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Daniel Felipe';
        $customer->lastName = 'Arias Angulo';
        $customer->phone = '3234562345';
        $customer->birthdate = '1994-08-26';
        $customer->email = 'danielf26@gmail.com';
        $customer->nameUser = 'daniel0826';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Daniel';
        $customer->lastName = 'Garcia Gutierrez';
        $customer->phone = '3123451234';
        $customer->birthdate = '1989-09-29';
        $customer->email = 'danielgar29@gmail.com';
        $customer->nameUser = 'danielgut09';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Oscar';
        $customer->lastName = 'Alvarez Andrade';
        $customer->phone = '3157890234';
        $customer->birthdate = '1998-04-26';
        $customer->email = 'oscaral26@gmail.com';
        $customer->nameUser = 'oscarand26';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();

        $customer = new User();
        $customer->name = 'Antonio';
        $customer->lastName = 'Rojas Castro';
        $customer->phone = '3105985678';
        $customer->birthdate = '1992-02-24';
        $customer->email = 'rojasanttonio@gmail.com';
        $customer->nameUser = 'antonioroj24';
        $customer->password = Hash::make('hola1234');
        $customer->type_user_id = 4;
        $customer->longitude = 7.23;
        $customer->latitude = 8.34;
        $customer->save();
    }
}
