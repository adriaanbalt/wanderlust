<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotImagePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image_photos_board', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';
			
			$table->increments('id');
				
			$table->integer('image_id')->unsigned()->nullable();
			$table->foreign('image_id')
				->references('id')
				->on('image')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('photo_id')->unsigned()->nullable();
			$table->foreign('photo_id')
				->references('id')
				->on('image_photos')
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
		Schema::drop('image_photos_board');
	}

}