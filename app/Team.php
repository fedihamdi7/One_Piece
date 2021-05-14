<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded=[];

    public function clubs()
    {
        return $this->belongsTo('App\Club');
    }
}
