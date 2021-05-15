<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded=[];
    public function clubs()
    {
        return $this->belongsTo('App\Club');
    }
}
