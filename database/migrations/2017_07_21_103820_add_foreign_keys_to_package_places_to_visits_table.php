<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPackagePlacesToVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('package_places_to_visits', function(Blueprint $table)
		{
			$table->foreign('package_id', 'fk_packages_has_places_to_visits_packages1')->references('id')->on('packages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('places_to_visit_id', 'fk_packages_has_places_to_visits_places_to_visits1')->references('id')->on('places_to_visits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('package_places_to_visits', function(Blueprint $table)
		{
			$table->dropForeign('fk_packages_has_places_to_visits_packages1');
			$table->dropForeign('fk_packages_has_places_to_visits_places_to_visits1');
		});
	}

}
