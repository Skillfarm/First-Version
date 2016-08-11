<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Opinion extends Model {

	protected $table = 'opinions';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', '1', '2', '3', '4');

}