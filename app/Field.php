<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model {

	protected $table = 'fields';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

	public function branchs()
	{
		return $this->belongsToMany('App\Branch', 'branch_field')->withTimestamps();
	}

	public function works()
	{
		return $this->belongsToMany('App\Work', 'field_work')->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany('App\User', 'field_user')->withTimestamps();
	}

}