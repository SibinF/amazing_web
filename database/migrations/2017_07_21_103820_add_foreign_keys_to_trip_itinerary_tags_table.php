<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTripItineraryTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trip_itinerary_tags', function(Blueprint $table)
		{
			$table->foreign('tag_id', 'fk_trip_itineraries_has_tags_tags1')->references('id')->on('tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('trip_itinerary_id', 'fk_trip_itineraries_has_tags_trip_itineraries1')->references('id')->on('trip_itineraries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trip_itinerary_tags', function(Blueprint $table)
		{
			$table->dropForeign('fk_trip_itineraries_has_tags_tags1');
			$table->dropForeign('fk_trip_itineraries_has_tags_trip_itineraries1');
		});
	}

}
