<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
