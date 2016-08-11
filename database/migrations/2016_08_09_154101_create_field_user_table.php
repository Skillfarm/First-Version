<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFieldUserTable extends Migration {

	public function up()
	{
		Schema::create('field_user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('field_id');
		});
	}

	public function down()
	{
		Schema::drop('field_user');
	}
}