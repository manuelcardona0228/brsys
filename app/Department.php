<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'state'
    ];

    public function city()
    {
        return $this->hasMany('App\City');
    }

    public function customer()
    {
        return $this->hasOne('App\User');
    }

    public function barbershop()
    {
        return $this->hasOne('App\Barbershop');
    }

    public function headquarters()
    {
        return $this->hasMany('App\Headquarter');
    }

}
