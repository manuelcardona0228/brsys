<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'img', 'profile_id'
    ];

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
}
