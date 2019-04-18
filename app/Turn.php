<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $fillable = [
        'day', 'hour', 'barber_id', 'service_id', 'customer_id', 'state'
    ];
}