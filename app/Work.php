<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model {

	protected $table = 'works';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('subject', 'details', 'deadtime', 'filename', 'wage', 'status');

	public function nazar(){
		return $this->hasMany(Work::class);
	}

	public function accepteds_users()
	{
		return $this->belongsToMany('App\User', 'accepteds')->withTimestamps();
	}

	public function applicants_users()
	{
		return $this->belongsToMany('App\User', 'applicants')->withTimestamps();
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function fields()
	{
		return $this->belongsToMany('App\Field', 'field_work')->withTimestamps();
	}

	public function ambiguitys_users()
	{
		return $this->belongsToMany('App\User', 'ambiguity_user_work')->withPivot('ambiguity_id')->withTimestamps();
	}

	public function ambiguitys()
	{
		return $this->belongsToMany('App\Ambiguity', 'ambiguity_user_work')->withPivot('user_id')->withTimestamps();
	}

	public function opnions()
	{
		return $this->belongsToMany('App\Opinion', 'opnion_user_work')->withPivot('user_id')->withTimestamps();
	}

	public function opnions_users()
	{
		return $this->belongsToMany('App\User', 'opnion_user_work')->withPivot('opnion_id')->withTimestamps();
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'tag_work')->withTimestamps();
	}
}