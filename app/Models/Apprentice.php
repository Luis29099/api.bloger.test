<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    //  public function computer(){
    //     return $this->belongsTo('App\Models\Computer');

    // }

     public function computer(){
        return $this->belongsTo(Computer::class);

    }
    public function course(){
        return $this->belongsTo(Course::class);

    }
}
