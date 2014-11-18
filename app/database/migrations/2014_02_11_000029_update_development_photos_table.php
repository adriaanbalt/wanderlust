<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDevelopmentPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('development_photos', function(Blueprint $table)
		{
			$table->integer('development_id')->unsigned()->nullable();
			$table->foreign('development_id')
				->references('id')
				->on('development')
				->on_delete('restrict')
				->on_update('cascade');
		});
	}

}
