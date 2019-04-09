<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = [
        'nit', 'businessName', 'address', 'email', 'phone', 'barbershop_id', 'department_id', 'city_id', 'longitude', 'latitude'
    ];
}
