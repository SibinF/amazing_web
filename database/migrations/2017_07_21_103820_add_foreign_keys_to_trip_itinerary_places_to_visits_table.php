<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTripItineraryPlacesToVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trip_itinerary_places_to_visits', function(Blueprint $table)
		{
			$table->foreign('places_to_visit_id', 'fk_trip_itineraries_has_places_to_visits_places_to_visits1')->references('id')->on('places_to_visits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('trip_itinerary_id', 'fk_trip_itineraries_has_places_to_visits_trip_itineraries1')->references('id')->on('trip_itineraries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trip_itinerary_places_to_visits', function(Blueprint $table)
		{
			$table->dropForeign('fk_trip_itineraries_has_places_to_visits_places_to_visits1');
			$table->dropForeign('fk_trip_itineraries_has_places_to_visits_trip_itineraries1');
		});
	}

}
