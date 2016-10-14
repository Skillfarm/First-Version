<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nazar extends Model
{
    //
    public function work(){
        return $this->belongsTo(Nazar::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
