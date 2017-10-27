<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripItinerariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip_itineraries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('thumb_image', 100)->nullable();
			$table->string('banner_image_one', 100)->nullable();
			$table->string('banner_image_two', 100)->nullable();
			$table->string('banner_image_three', 100)->nullable();
			$table->string('banner_image_four', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip_itineraries');
	}

}
