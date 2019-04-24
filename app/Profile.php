<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'imageProfile', 'description', 'barber_id'
    ];

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
