<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotRookiesVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rookies_videos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->integer('rookies_id')->unsigned();
			$table->foreign('rookies_id')
				->references('id')
				->on('rookies')
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
		Schema::drop('rookies_videos');
	}

}