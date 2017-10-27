<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTripItineraryTripActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trip_itinerary_trip_activities', function(Blueprint $table)
		{
			$table->foreign('trip_activity_id', 'fk_trip_itineraries_has_trip_activities_trip_activities1')->references('id')->on('trip_activities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('trip_itinerary_id', 'fk_trip_itineraries_has_trip_activities_trip_itineraries1')->references('id')->on('trip_itineraries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trip_itinerary_trip_activities', function(Blueprint $table)
		{
			$table->dropForeign('fk_trip_itineraries_has_trip_activities_trip_activities1');
			$table->dropForeign('fk_trip_itineraries_has_trip_activities_trip_itineraries1');
		});
	}

}
