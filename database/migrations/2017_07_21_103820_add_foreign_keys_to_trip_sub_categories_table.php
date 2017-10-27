<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTripSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trip_sub_categories', function(Blueprint $table)
		{
			$table->foreign('trip_category_id', 'fk_trip_sub_categories_trip_categories')->references('id')->on('trip_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trip_sub_categories', function(Blueprint $table)
		{
			$table->dropForeign('fk_trip_sub_categories_trip_categories');
		});
	}

}
