<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nit', 'businessName', 'address','email','phone','website','department_id','city_id','barbershop_administrator_id'
    ];
}
