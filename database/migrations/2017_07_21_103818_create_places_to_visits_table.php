<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlacesToVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('places_to_visits', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('location', 45)->nullable();
			$table->string('state', 45)->nullable();
			$table->string('country', 45)->nullable();
			$table->string('thumb_image', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('places_to_visits');
	}

}
