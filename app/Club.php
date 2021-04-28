<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function team()
    {
        return $this->hasMany('App\Team');
    }

    public function user()
    {
        // return $this->hasMany('App\User');
        return $this->hasOne('App\User');
    }
}
