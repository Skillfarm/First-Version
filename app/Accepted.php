<?php



class Accepted extends Eloquent {

	protected $table = 'accepteds';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];

}