<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotSomegirlsVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('somegirls_videos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->integer('somegirls_id')->unsigned();
			$table->foreign('somegirls_id')
				->references('id')
				->on('somegirls')
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
		Schema::drop('somegirls_videos');
	}

}