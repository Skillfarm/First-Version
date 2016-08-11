<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Branch extends Model {

	protected $table = 'branchs';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

	public function fields()
	{
		return $this->belongsToMany('App\Field', 'branch_field')->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany('App\User', 'branch_user')->withTimestamps();
	}

	public function works()
	{
		return $this->hasManyThrough('App\Work', 'App\Field');
	}

}