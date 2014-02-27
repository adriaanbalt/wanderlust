<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotWomenPhotosBoardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('women_photos_board', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';
			
			$table->increments('id');
			
			$table->integer('board_id')->unsigned()->nullable();
			$table->foreign('board_id')
				->references('id')
				->on('womenboard')
				->on_delete('restrict')
				->on_update('cascade');
				
			$table->integer('women_id')->unsigned()->nullable();
			$table->foreign('women_id')
				->references('id')
				->on('women')
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
		Schema::drop('women_photos_board');
	}

}