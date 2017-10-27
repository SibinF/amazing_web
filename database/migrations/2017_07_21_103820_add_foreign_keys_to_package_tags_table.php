<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPackageTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('package_tags', function(Blueprint $table)
		{
			$table->foreign('package_id', 'fk_packages_has_tags_packages1')->references('id')->on('packages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tag_id', 'fk_packages_has_tags_tags1')->references('id')->on('tags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('package_tags', function(Blueprint $table)
		{
			$table->dropForeign('fk_packages_has_tags_packages1');
			$table->dropForeign('fk_packages_has_tags_tags1');
		});
	}

}
