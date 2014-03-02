<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotDevelopmentPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('development_photos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->increments('id');
			
			$table->integer('development_id')->unsigned()->nullable();
			$table->foreign('development_id')
				->references('id')
				->on('development')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('photo_id')->unsigned()->nullable();
			$table->foreign('photo_id')
				->references('id')
				->on('photos')
				->on_delete('restrict')
				->on_update('cascade');

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
		Schema::drop('development_photos');
	}

}