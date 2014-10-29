<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateArtistsPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('artists_photos', function(Blueprint $table)
		{
			$table->integer('artists_id')->unsigned()->nullable();
			$table->foreign('artists_id')
				->references('id')
				->on('artists')
				->on_delete('restrict')
				->on_update('cascade');
		});
	}

}
