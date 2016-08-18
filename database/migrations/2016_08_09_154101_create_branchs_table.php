<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchsTable extends Migration {

	public function up()
	{
		Schema::create('branchs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('pic_name');//new
		});
	}

	public function down()
	{
		Schema::drop('branchs');
	}
}