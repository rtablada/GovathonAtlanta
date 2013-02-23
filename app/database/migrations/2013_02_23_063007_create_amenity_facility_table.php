<?php

use Illuminate\Database\Migrations\Migration;

class CreateAmenityFacilityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('facility', function($table)
	  {
	    $table->increments('id');
	    $table->integer('amenity_id');
			$table->integer('facility_id');
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
	  Schema::drop('facility');
	}

}