<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'phone', 'birthdate', 'address','email', 'nameUser','password', 'qualification', 'type_user_id', 'department_id', 'city_id', 'barbershop_id','headquarter_id', 'longitude', 'latitude',
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
        return $this->belongsTo('App\TypeUser');
    }

    public function turns()
    {
        return $this->hasMany('App\Turn');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function headquarter()
    {
        return $this->belongsTo('App\Headquarter');
    }

    public function barbershop()
    {
        return $this->belongsTo('App\Barbershop');
    }

    public function event()
    {
        return $this->hasOne('App\Event');
    }


}
