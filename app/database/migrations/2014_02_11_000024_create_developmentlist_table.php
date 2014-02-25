<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevelopmentlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('developmentlist', function(Blueprint $table) {
			$table->engine ='InnoDB';

			$table->increments('id');

			$table->integer('development_id')->unsigned()->nullable();
			$table->foreign('development_id')
				->references('id')
				->on('development')
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
		Schema::drop('developmentlist');
	}

}
