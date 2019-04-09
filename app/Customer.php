<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'document','name', 'lastName', 'phone', 'birthdate', 'address', 'email', 'nameUser', 'password', 'type_user_id', 'department_id', 'city_id', 'longitude', 'latitude'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
