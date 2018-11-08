<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serie extends Model
{
  public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
  public function actors()
    {
        return $this->belongsToMany('App\Actor');
    }  
}
