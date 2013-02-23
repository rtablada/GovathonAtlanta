<?php

use Illuminate\Database\Migrations\Migration;

class AddLatLongToFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::table('facilities', function($table)
	  {
	    $table->string('latitude');
		$table->string('longitude');
	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	  Schema::table('facilities', function($table)
	  {
	    $table->dropColumn('latitude');
		$table->dropColumn('longitude');
	  });
	}

}