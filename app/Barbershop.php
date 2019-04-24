<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nit', 'businessName', 'address','email','phone','website','department_id','city_id',
    ];

    public function barbershopAdministrator()
    {
        return $this->hasOne('App\BarbershopAdministrator');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function headquarters()
    {
        return $this->hasMany('App\Headquarter');
    }
}
