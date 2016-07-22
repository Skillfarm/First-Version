<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });


        schema::create('label_work', function (Blueprint $table){
            $table->integer('label_id')->unsigned()->index();
            $table->foreign('label_id')->references('id')->on('labels')->onDelete('cascade');

            $table->integer('work_id')->unsigned()->index();
            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('labels');
        Schema::drop('label_work');

    }
}
