<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotRookiesPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rookies_photos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->integer('rookies_id')->unsigned();
			$table->foreign('rookies_id')
				->references('id')
				->on('rookies')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('photo_id')->unsigned();
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
		Schema::drop('rookies_photos');
	}

}