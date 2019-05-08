<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name', 'state', 'department_id'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function customer()
    {
        return $this->hasOne('App\User');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function headquarters()
    {
        return $this->hasOne('App\Headquarter');
    }

    public function barbershops()
    {
        return $this->hasOne('App\Barbershop');
    }

    public static function cities($id)
    {
        return City::where('department_id', $id)->get();
    }
}
