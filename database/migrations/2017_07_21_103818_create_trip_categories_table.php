<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTripCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trip_categories', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 80)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('thumb_image', 45)->nullable();
			$table->string('banner_image', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trip_categories');
	}

}
