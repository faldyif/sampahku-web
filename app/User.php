<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

//     public function isAdmin()
//     {
//         // if($this->role = 2) return true;
//         // else return false;
// //         public function isAdmin() {

// //         return $this->hasRole('Admin'); // ?? something like this! should return true or false
// // }
//     }

    public function isAdmin()
    {
        if($this->role = 0) return true;
        else return false;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function trash()
    {
        return $this->hasMany('App\Trash');
    }
    public function story()
    {
        return $this->hasMany('App\Story');
    }
    public function pointhistory()
    {
        return $this->hasMany('App\PointHistory');
    }
    public function rewardHistory()
    {
        return $this->hasMany('App\RewardHistory');
    }
    public function userFalseReport()
    {
        return $this->hasMany('App\UserFalseReport');
    }
    public function userTrueReport()
    {
        return $this->hasMany('App\UserFalseReport');
    }

}
