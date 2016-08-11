<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpinionUserWorkTable extends Migration {

	public function up()
	{
		Schema::create('opinion_user_work', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('work_id');
			$table->integer('opinion_id');
		});
	}

	public function down()
	{
		Schema::drop('opinion_user_work');
	}
}