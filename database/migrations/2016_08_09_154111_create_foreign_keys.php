<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('works', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('works', function(Blueprint $table) {
			$table->dropForeign('works_user_id_foreign');
		});
	}
}