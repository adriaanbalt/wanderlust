<?php

class PivotDevelopmentPhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('development_photos')->delete();

		$array = array(
			array(
					'development_id' => 1,
					'photo_id' => 1
			),
			array(
					'development_id' => 2,
					'photo_id' => 2
			),
			array(
					'development_id' => 3,
					'photo_id' => 3
			)
		);

		
		DB::table('development_photos')->insert($array);
	}

}


/*
	$table->foreign('women_id')
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