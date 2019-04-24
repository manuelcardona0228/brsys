<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }

    public function systemAdministrator()
    {
        return $this->hasOne('App\SystemAdministrator');
    }

    public function barbershopAdministrator()
    {
        return $this->hasOne('App\BarbershopAdministrator');
    }
}
