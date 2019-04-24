<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = [
        'nit', 'businessName', 'address', 'email', 'phone', 'barbershop_id', 'department_id', 'city_id', 'longitude', 'latitude'
    ];


    public function barbershop()
    {
        return $this->hasOne('App\Barbershop');
    }

    public function city()
    {
        return $this->hasOne('App\Profile');
    }

    public function barbers()
    {
        return $this->hasMany('App\Barber');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
