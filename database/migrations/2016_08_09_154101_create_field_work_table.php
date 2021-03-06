<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFieldWorkTable extends Migration {

	public function up()
	{
		Schema::create('field_work', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('field_id');
			$table->integer('work_id');
		});
	}

	public function down()
	{
		Schema::drop('field_work');
	}
}