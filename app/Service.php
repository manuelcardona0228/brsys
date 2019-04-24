<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'description', 'value', 'name', 'img', 'barbershop_id'
    ];

    public function barbershop()
    {
        return $this->hasOne('App\Barbershop');
    }

    public function turn()
    {
        return $this->hasOne('App\Turno');
    }
}
