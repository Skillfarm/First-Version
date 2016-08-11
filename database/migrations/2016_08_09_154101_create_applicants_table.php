<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicantsTable extends Migration {

	public function up()
	{
		Schema::create('applicants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('work_id');
		});
	}

	public function down()
	{
		Schema::drop('applicants');
	}
}