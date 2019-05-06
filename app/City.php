<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 'state', 'department_id'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function headquarters()
    {
        return $this->hasOne('App\Headquarter');
    }

    public function barbershops()
    {
        return $this->hasOne('App\Barbershop');
    }
}
