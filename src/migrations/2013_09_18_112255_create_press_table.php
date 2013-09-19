<?php

use Illuminate\Database\Migrations\Migration;

class CreatePressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('press', function($table)
			{
				$table->increments('id');
				$table->string('title');
				$table->string('image');
				$table->text('content');
				$table->string('link');
				$table->boolean('published');
				$table->timestamps();

				$table->index('id');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('press', function($table)
			{
				$table->dropIndex('press_id_primary');
			});
	}

}