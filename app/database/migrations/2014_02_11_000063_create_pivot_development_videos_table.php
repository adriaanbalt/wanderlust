<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotDevelopmentVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('development_videos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->increments('id');
			
			$table->integer('development_id')->unsigned()->nullable();
			$table->foreign('development_id')
				->references('id')
				->on('development')
				->on_delete('restrict')
				->on_update('cascade');
			
			$table->integer('video_id')->unsigned()->nullable();
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
		Schema::drop('development_videos');
	}

}