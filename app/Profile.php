<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'imgProfile', 'description', 'barber_id'
    ];
}
