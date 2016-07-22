<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $fillable = [
        'detail',
        'status',
        'dead_time',
        'subject',
        'department_id',
        'course_id'
    ];

    protected $dates = ['dead_time']; //$article->dead_time->format('Y-m')! by default created_at and update_at have this property!

    //not mine!
//    public function user()
//    {
//        return $this->belongsTo('App\User');
//    }
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
    public function setDeadTimeAttribute($date){ //
        $this->attributes['dead_time'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    public function scopehaveTime($query){ //show or not show or sth like these works that done or not!
        $query->where('dead_time', '>=', Carbon::now());
    }

    //A work is owned by a user.
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    

    //Get the tag associated with the given work!
    public function labels()
    {
        return $this->belongsToMany('App\Label')->withTimestamps();
    }

    //Get a list of label ids associated with the current work!
    public function getLabelListsAttribute(){
        return $this->labels->lists('id');
    }

}
