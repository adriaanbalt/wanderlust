<?php

class PivotModelsPhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('models_photos')->delete();

		$array = array(
			array(
					'model_id' => 1,
					'photo_id' => 1
			),
			array(
					'model_id' => 2,
					'photo_id' => 2
			),
			array(
					'model_id' => 3,
					'photo_id' => 3
			)
		);

		// Uncomment the below to run the seeder
		DB::table('models_photos')->insert($array);
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