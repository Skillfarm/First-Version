<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $fillable = [
        'detail','status','dead_time','subject'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    public function acceptance()
    {
        return $this->hasMany('App\Acceptance');
    }
}
