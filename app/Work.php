<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $fillable = [
        'detail','status','dead_time','subject'
    ];

    protected $dates = ['dead_time'];

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
    public function department(){
        return $this->belongsTo('App\Department');
    }


    //zeinab
    public function setDeadTimeAttribute($date){
        $this->attributes['dead_time'] = Carbon::createFromFormat('Y-m-d', $date);

    }


    public function scopehaveTime($query){
        $query->where('dead_time', '>=', Carbon::now());
    }

}
