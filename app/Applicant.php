<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends model {

	protected $table = 'applicants';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];

}