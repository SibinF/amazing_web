<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagTripItinerariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packag_trip_itineraries', function(Blueprint $table)
		{
			$table->integer('package_id')->index('fk_packages_has_trip_itineraries_packages1_idx');
			$table->integer('trip_itinerary_id')->index('fk_packages_has_trip_itineraries_trip_itineraries1_idx');
			$table->primary(['package_id','trip_itinerary_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('packag_trip_itineraries');
	}

}
