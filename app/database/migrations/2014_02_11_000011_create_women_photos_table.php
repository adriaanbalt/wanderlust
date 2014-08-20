<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWomenPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('women_photos', function(Blueprint $table)
		{
			$table->engine ='InnoDB';

			$table->increments('id');
			
			$table->string('title');
			$table->string('slug');
			$table->string('path');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos');
	}

}
