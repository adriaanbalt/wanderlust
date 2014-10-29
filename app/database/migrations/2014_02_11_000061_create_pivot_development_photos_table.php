<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotArtistsPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artists_photos_board', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->increments('id');
			
			$table->integer('artists_id')->unsigned()->nullable();
			$table->foreign('artists_id')
				->references('id')
				->on('artists')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('photo_id')->unsigned()->nullable();
			$table->foreign('photo_id')
				->references('id')
				->on('artists_photos')
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
		Schema::drop('artists_photos_board');
	}

}