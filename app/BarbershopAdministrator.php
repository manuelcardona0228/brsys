<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarbershopAdministrator extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'phone', 'birthdate', 'address', 'email', 'nameUser', 'password', 'type_user_id', 'longitude', 'latitude'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typeUser()
    {
        return $this->hasOne('App\TypeUser');
    }

    public function barbershop()
    {
        return $this->hasOne('App\Barbershop');
    }
}
