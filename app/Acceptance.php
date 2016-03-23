<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceptance extends Model
{
    //
    protected $fillable = [
        'detail','status','dead_time','cost'
    ];
    public function user()
{
    return $this->belongsTo('App\User');
}
    public function work()
    {
        return $this->belongsTo('App\Work');
    }
}
