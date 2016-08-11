<?php



class Applicant extends Eloquent {

	protected $table = 'applicants';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];

}