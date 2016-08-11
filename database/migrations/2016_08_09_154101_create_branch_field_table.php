<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchFieldTable extends Migration {

	public function up()
	{
		Schema::create('branch_field', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('branch_id');
			$table->integer('field_id');
		});
	}

	public function down()
	{
		Schema::drop('branch_field');
	}
}