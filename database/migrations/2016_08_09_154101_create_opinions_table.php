<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpinionsTable extends Migration {

	public function up()
	{
		Schema::create('opinions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('o1');
			$table->string('o2');
			$table->string('o3');
			$table->string('o4');
		});
	}

	public function down()
	{
		Schema::drop('opinions');
	}
}