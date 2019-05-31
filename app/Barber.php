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
        'name', 'lastName', 'phone', 'birthdate', 'address', 'email', 'nameUser', 'password', 'qualification', 'type_user_id', 'headquarter_id'
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
        return $this->hasOne('App\TypeUser');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function headquarter()
    {
        return $this->hasOne('App\Headquarter');
    }

    public function turn()
    {
        return $this->hasMany('App\Turn');
    }

    public static function barbers($id)
    {
        return User::where('headquarter_id', $id)->where('type_user_id', 3)->get();
    }
}
