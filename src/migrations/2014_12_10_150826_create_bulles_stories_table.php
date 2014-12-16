<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBullesStoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('bulle::table_prefix').'stories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('slug');
			$table->longText('settings');
			$table->softDeletes();
			$table->timestamps();
			
			$table->index('type');
			$table->unique('slug');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('bulle::table_prefix').'stories');
	}

}
