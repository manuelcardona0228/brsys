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
        return $this->belongsTo('App\Barbershop');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
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
