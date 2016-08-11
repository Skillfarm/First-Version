<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('subject');
			$table->text('details');
			$table->date('deadtime');
			$table->string('filename');
			$table->integer('wage');
			$table->string('status');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('works');
	}
}