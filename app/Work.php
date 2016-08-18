<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model {

	protected $table = 'works';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('subject', 'details', 'deadtime', 'filename', 'wage', 'status');

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

	public function opinions()
	{
		return $this->belongsToMany('App\Opinion', 'opinion_user_work')->withPivot('user_id')->withTimestamps();
	}

	public function opinions_users()
	{
		return $this->belongsToMany('App\User', 'opinion_user_work')->withPivot('opinion_id')->withTimestamps();
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'tag_work')->withTimestamps();
	}

}