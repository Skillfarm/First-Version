<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class Ambiguity extends Model {

	protected $table = 'ambiguitys';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

}