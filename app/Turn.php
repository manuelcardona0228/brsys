<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $fillable = [
        'day', 'hour', 'barber_id', 'service_id', 'customer_id', 'state'
    ];

    public function servicio()
    {
        return $this->hasOne('App\Servicio');
    }

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }

    public function barber()
    {
        return $this->hasOne('App\Barber');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
