<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotModelsPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('models_photos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->integer('model_id')->unsigned();
			$table->foreign('model_id')
				->references('id')
				->on('models')
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
		Schema::drop('models_photos');
	}

}