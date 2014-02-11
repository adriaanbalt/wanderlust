<?php

class PivotModelsVideosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('models_videos')->delete();

		$array = array(
			array(
					'model_id' => '1',
					'video_id' => '1'
			),
			array(
					'model_id' => '2',
					'video_id' => '2'
			),
			array(
					'model_id' => '3',
					'video_id' => '3'
			)
		);

		// Uncomment the below to run the seeder
		DB::table('models_videos')->insert($array);
	}

}


/*
	$table->foreign('model_id')
		->references('id')
		->on('models')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('model_id')
		->references('id')
		->on('videos')
		->on_delete('restrict')
		->on_update('cascade');
*/