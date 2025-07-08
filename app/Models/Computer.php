<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    //  public function apprentice(){
    //     return $this->hasOne('App\Models\Apprentice');
    // }
    protected $fillable = ['number', 'brand'];

    public function apprentice(){
        return $this->hasOne(Apprentice::class);
    }
    public function scopeIncluded(Builder $query){
        return request('included');
        $relations=explode(',',request('include'));
        return $relations;
    }
}
