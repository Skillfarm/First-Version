<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchUserTable extends Migration {

	public function up()
	{
		Schema::create('branch_user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id');
			$table->integer('branch_id');
		});
	}

	public function down()
	{
		Schema::drop('branch_user');
	}
}