<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('packages', function(Blueprint $table)
		{
			$table->foreign('travel_type_id', 'fk_packages_travel_types1')->references('id')->on('travel_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('trip_sub_category_id', 'fk_packages_trip_sub_categories1')->references('id')->on('trip_sub_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('packages', function(Blueprint $table)
		{
			$table->dropForeign('fk_packages_travel_types1');
			$table->dropForeign('fk_packages_trip_sub_categories1');
		});
	}

}
