<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastNamephone', 'fechaNac', 'address', 'email', 'nameUser', 'password', 'qualification', 'type_user_id', 'headquarter_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
