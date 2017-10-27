<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripItineraryTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip_itinerary_tags', function(Blueprint $table)
		{
			$table->integer('trip_itinerary_id')->index('fk_trip_itineraries_has_tags_trip_itineraries1_idx');
			$table->integer('tag_id')->index('fk_trip_itineraries_has_tags_tags1_idx');
			$table->primary(['trip_itinerary_id','tag_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip_itinerary_tags');
	}

}
