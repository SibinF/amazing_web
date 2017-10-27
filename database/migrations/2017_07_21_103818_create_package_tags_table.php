<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('package_tags', function(Blueprint $table)
		{
			$table->integer('package_id')->index('fk_packages_has_tags_packages1_idx');
			$table->integer('tag_id')->index('fk_packages_has_tags_tags1_idx');
			$table->primary(['package_id','tag_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('package_tags');
	}

}
