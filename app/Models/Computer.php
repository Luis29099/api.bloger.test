<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    //  public function apprentice(){
    //     return $this->hasOne('App\Models\Apprentice');
    // }
    protected $allowIncluded=['aprentice','aprentice.course'];
    protected $fillable = ['number', 'brand'];

    public function apprentice(){
        return $this->hasOne(Apprentice::class);
    }
    public function scopeIncluded(Builder $query){
        if (empty($this->allowIncluded) || empty(request('included'))) {
          return;
        }
        // return request('included');

        $relations=explode(',',request('included'));

        // return $relations;

        $allowIncluded = collect($this->allowIncluded);


        foreach ($relations as $key => $relationship) { //recorremos el array de relaciones

            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }
        
        $query->with($relations);

        
    }
}
