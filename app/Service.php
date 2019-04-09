<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'description', 'value', 'name', 'img', 'barbershop_id'
    ];
}
