<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    public function userFalseReport()
    {
        return $this->hasMany('App\UserFalseReport');
    }
    public function userTrueReport()
    {
        return $this->hasMany('App\UserFalseReport');
    }
}
