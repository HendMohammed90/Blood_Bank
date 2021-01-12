<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reque extends Model
{
    protected $fillable = ['name' ,'address' ,'phone' ,'AnotherPhone'   ,'bloodType' ,'timeForCall' ,'callingWay' ,'gender'];

}
