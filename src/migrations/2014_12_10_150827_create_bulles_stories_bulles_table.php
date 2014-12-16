<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBullesStoriesBullesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('eloquent-bulle::table_prefix').'stories_bulles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('story_id')->unsigned();
			$table->integer('bulle_id')->unsigned();
			$table->smallInteger('bulle_order')->unsigned();
			$table->timestamps();
			
			$table->index('story_id');
			$table->index('bulle_id');
			$table->index('bulle_order');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('eloquent-bulle::table_prefix').'stories_bulles');
	}

}
