<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders',function(Blueprint $table){
         $table->increments('id');
         $table->string('name');
         $table->string('description');
         $table->string('imgPath'); 
         $table->string('link');
         $table->string('admin_name'); 
         $table->boolean('IsEnable');
         $table->dateTime('created_at');
         $table->timestamp('updated_at');
     });
	}
     
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sliders');
	}

}
