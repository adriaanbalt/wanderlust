<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotSomegirlsPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('somegirls_photos', function(Blueprint $table)
		{
	        $table->engine ='InnoDB';

			$table->integer('somegirls_id')->unsigned();
			$table->foreign('somegirls_id')
				->references('id')
				->on('somegirls')
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
		Schema::drop('somegirls_photos');
	}

}