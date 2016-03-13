<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function course()
    {
        return $this->hasMany('App\Course');
    }
    public function work()
    {
        return $this->hasMany('App\Work');
    }
}
