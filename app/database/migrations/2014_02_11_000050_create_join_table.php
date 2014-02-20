<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJoinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('join', function(Blueprint $table) {
			$table->engine ='InnoDB';

			$table->increments('id');
			
			$table->string('first_name');
			$table->string('last_name');
			$table->string('address');
			$table->string('apt');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('zipcode');
			$table->string('telephone');
			$table->string('email');
			$table->boolean('gender');
			$table->string('birthday');
			$table->string('comments');
			$table->string('picture');

			// $table->string('height');
			// $table->string('bust');
			// $table->string('waist');
			// $table->string('hips');
			// $table->string('shoes');
			// $table->string('hair');
			// $table->string('eyes');
			
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
		Schema::drop('join');
	}

}
