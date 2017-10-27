<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 200)->nullable();
			$table->string('quote', 400)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('thumb_image', 100)->nullable();
			$table->string('banner_image_one', 100)->nullable();
			$table->string('banner_image_two', 100)->nullable();
			$table->string('banner_image_three', 100)->nullable();
			$table->integer('trip_sub_category_id')->index('fk_packages_trip_sub_categories1_idx');
			$table->integer('no_of_day')->nullable();
			$table->integer('no_of_night')->nullable();
			$table->integer('travel_type_id')->index('fk_packages_travel_types1_idx');
			$table->date('depature_date')->nullable();
			$table->primary(['id','trip_sub_category_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('packages');
	}

}
