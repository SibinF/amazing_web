<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagePlacesToVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('package_places_to_visits', function(Blueprint $table)
		{
			$table->integer('package_id')->index('fk_packages_has_places_to_visits_packages1_idx');
			$table->integer('places_to_visit_id')->index('fk_packages_has_places_to_visits_places_to_visits1_idx');
			$table->primary(['package_id','places_to_visit_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('package_places_to_visits');
	}

}
