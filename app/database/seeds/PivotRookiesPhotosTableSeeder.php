<?php

class PivotRookiesPhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('rookies_photos')->delete();

		$array = array(
			array(
					'rookies_id' => 1,
					'photo_id' => 1
			),
			array(
					'rookies_id' => 2,
					'photo_id' => 2
			),
			array(
					'rookies_id' => 3,
					'photo_id' => 3
			)
		);

		// Uncomment the below to run the seeder
		DB::table('rookies_photos')->insert($array);
	}

}


/*
	$table->foreign('model_id')
		->references('id')
		->on('models')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('photo_id')
		->references('id')
		->on('photos')
		->on_delete('restrict')
		->on_update('cascade');
*/