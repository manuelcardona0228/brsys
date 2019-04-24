<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemAdministrator extends Model
{
    protected $fillable = [
        'name', 'lastName', 'email', 'phone', 'nameUser', 'password', 'birthdate', 'type_user_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typeUser()
    {
        return $this->hasOne('App\TypeUser');
    }
}
