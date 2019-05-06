<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'barber_id', 'turn_id', 'color', 'textColor', 'end',
    ];

    public function turn()
    {
        return $this->belongsTo('App\Turn');
    }

    public function barber()
    {
        return $this->belongsTo('App\User');
    }
}
