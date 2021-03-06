<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripSubCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip_sub_categories', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('thumb_image', 45)->nullable();
			$table->string('banner_image', 45)->nullable();
			$table->integer('trip_category_id')->index('fk_trip_sub_categories_trip_categories_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip_sub_categories');
	}

}
