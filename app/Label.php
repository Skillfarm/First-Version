<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    protected $fillable = [
        'name'
    ];

    //get the works associated with the given label.
    public function works(){
        return $this->belongsToMany('App\Work');
    }
}
