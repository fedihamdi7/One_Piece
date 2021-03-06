<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];
    public function clubs()
    {
        return $this->hasMany('App\Club');
    }

}

