<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function course()
    {
        return $this->hasMany('App\Course');
    }

    public function  works()
    {
        return $this->hasManyThrough('App\Course','App\Work');
    }
}
