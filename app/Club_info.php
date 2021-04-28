<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club_info extends Model
{
    public function clubs()
    {
       return $this->belongsTo('App\Club');
   }
}
