<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripItineraryPlacesToVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip_itinerary_places_to_visits', function(Blueprint $table)
		{
			$table->integer('trip_itinerary_id')->index('fk_trip_itineraries_has_places_to_visits_trip_itineraries1_idx');
			$table->integer('places_to_visit_id')->index('fk_trip_itineraries_has_places_to_visits_places_to_visits1_idx');
			$table->primary(['trip_itinerary_id','places_to_visit_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip_itinerary_places_to_visits');
	}

}
