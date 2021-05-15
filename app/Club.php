<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function club_info()
    {
        return $this->hasOne('App\Club_info');
    }

    public function post()
    {
        return $this->hasOne('App\Post');
    }

    public function team()
    {
        return $this->hasMany('App\Team');
    }
    public function event()
    {
        return $this->hasMany('App\Event');
    }
    public function user()
    {
        // return $this->hasMany('App\User');
        return $this->hasOne('App\User');
    }
}
