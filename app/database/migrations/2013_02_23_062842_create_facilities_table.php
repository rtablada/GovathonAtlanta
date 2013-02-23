<?php

use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('facilities', function($table)
	  {
	    $table->increments('id');
	    $table->string('name');
		$table->string('address_street');
		$table->integer('address_zip');
		$table->integer('area');
		$table->integer('cost');
		$table->text('description');
		$table->string('phone');
		$table->string('contact_name');
		$table->string('email');
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
	  Schema::drop('facilities');
	}

}