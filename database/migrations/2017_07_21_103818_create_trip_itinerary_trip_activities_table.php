<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripItineraryTripActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip_itinerary_trip_activities', function(Blueprint $table)
		{
			$table->integer('trip_itinerary_id')->index('fk_trip_itineraries_has_trip_activities_trip_itineraries1_idx');
			$table->integer('trip_activity_id')->index('fk_trip_itineraries_has_trip_activities_trip_activities1_idx');
			$table->primary(['trip_itinerary_id','trip_activity_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip_itinerary_trip_activities');
	}

}
