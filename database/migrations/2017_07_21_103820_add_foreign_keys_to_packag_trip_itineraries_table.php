<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPackagTripItinerariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('packag_trip_itineraries', function(Blueprint $table)
		{
			$table->foreign('package_id', 'fk_packages_has_trip_itineraries_packages1')->references('id')->on('packages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('trip_itinerary_id', 'fk_packages_has_trip_itineraries_trip_itineraries1')->references('id')->on('trip_itineraries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('packag_trip_itineraries', function(Blueprint $table)
		{
			$table->dropForeign('fk_packages_has_trip_itineraries_packages1');
			$table->dropForeign('fk_packages_has_trip_itineraries_trip_itineraries1');
		});
	}

}
