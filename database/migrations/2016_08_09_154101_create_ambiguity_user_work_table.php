<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmbiguityUserWorkTable extends Migration {

	public function up()
	{
		Schema::create('ambiguity_user_work', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('work_id');
			$table->integer('ambiguity_id');
		});
	}

	public function down()
	{
		Schema::drop('ambiguity_user_work');
	}
}