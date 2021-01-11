<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rege extends Model
{
    protected $fillable = ['name' ,'address' ,'phone' ,'AnotherPhone' ,'age' ,'weight' ,'bloodType' ,'smoking' ,'timeForCall' ,'callingWay' ,'gender'];
}
