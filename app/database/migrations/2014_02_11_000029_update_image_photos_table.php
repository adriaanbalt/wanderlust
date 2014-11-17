<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateImagePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('image_photos', function(Blueprint $table)
		{
			$table->integer('image_id')->unsigned()->nullable();
			$table->foreign('image_id')
				->references('id')
				->on('image')
				->on_delete('restrict')
				->on_update('cascade');
		});
	}

}
