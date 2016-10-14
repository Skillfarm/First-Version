<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get all of the tasks for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function nazar(){
        return $this->hasMany(Nazar::class);
    }

    public function accepteds_works()
    {
        return $this->belongsToMany('App\Work', 'accepteds')->withTimestamps();
    }

    public function applicants_works()
    {
        return $this->belongsToMany('App\Work', 'applicants')->withTimestamps();
    }

    public function works()
    {
        return $this->hasMany('App\Work');
    }

    public function ambiguitys_works()
    {
        return $this->belongsToMany('App\Work', 'ambiguity_user_work')->withPivot('ambiguity_id')->withTimestamps();
    }

    public function ambiguitys()
    {
        return $this->belongsToMany('App\Ambiguity', 'ambiguity_user_work')->withPivot('work_id')->withTimestamps();
    }

    public function opnion4me_works()
    {
        return $this->belongsToMany('App\Work', 'opnion_user_work')->withPivot('opnion_id')->withTimestamps();
    }

    public function opnions4me()
    {
        return $this->belongsToMany('App\Opinion', 'opnion_user_work')->withPivot('work_id')->withTimestamps();
    }

    public function favorite_fields()
    {
        return $this->belongsToMany('App\Field', 'field_user')->withTimestamps();
    }

    public function favorite_branchs()
    {
        return $this->belongsToMany('App\Branch', 'branch_user')->withTimestamps();
    }
}
