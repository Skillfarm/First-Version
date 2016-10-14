<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accepted extends model {

	protected $table = 'accepteds';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];

}