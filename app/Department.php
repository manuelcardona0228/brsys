<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'state'
    ];

    public function city()
    {
        return $this->hasMany('App\City');
    }

    public function customer()
    {
        return $this->hasOne('App\User');
    }
}
