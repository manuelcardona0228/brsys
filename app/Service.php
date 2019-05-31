<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'description', 'value', 'name', 'img', 'barbershop_id'
    ];

    public function barbershop()
    {
        return $this->belongsTo('App\Barbershop');
    }

    public function turn()
    {
        return $this->hasOne('App\Turno');
    }

    public static function services($id)
    {
        return Service::where('barbershop_id', $id)->get();
    }
}
