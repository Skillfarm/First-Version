<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagWorkTable extends Migration {

	public function up()
	{
		Schema::create('tag_work', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('tag_id');
			$table->string('work_id');
		});
	}

	public function down()
	{
		Schema::drop('tag_work');
	}
}