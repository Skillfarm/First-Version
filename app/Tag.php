<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Tag extends Model {

	protected $table = 'tags';
	public $timestamps = true;

	

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

	public function works()
	{
		return $this->belongsToMany('App\Work', 'tag_work')->withTimestamps();
	}

}