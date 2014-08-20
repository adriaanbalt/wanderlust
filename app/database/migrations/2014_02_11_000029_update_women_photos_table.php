<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWomenPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('women_photos', function(Blueprint $table)
		{
			$table->integer('women_id')->unsigned()->nullable();
			$table->foreign('women_id')
				->references('id')
				->on('women')
				->on_delete('restrict')
				->on_update('cascade');
		});
	}

}
