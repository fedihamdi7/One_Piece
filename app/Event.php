<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function clubs()
    {
        return $this->belongsTo('App\Club');
    }
}
