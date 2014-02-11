<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotModelsVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('models_videos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->integer('model_id')->unsigned();
			$table->foreign('model_id')
				->references('id')
				->on('models')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('video_id')->unsigned();
			$table->foreign('video_id')
				->references('id')
				->on('videos')
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
		Schema::drop('models_videos');
	}

}