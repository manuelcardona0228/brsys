<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $fillable = [
        'day', 'hour', 'barber_id', 'service_id', 'customer_id', 'state'
    ];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function customer()
    {
        return $this->belongsTo('App\User');
    }

    public function barber()
    {
        return $this->belongsTo('App\User');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function events()
    {
        return $this->hasOne('App\Event');
    }
}
