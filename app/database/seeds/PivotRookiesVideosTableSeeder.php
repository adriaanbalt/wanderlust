<?php

class PivotRookiesVideosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('rookies_videos')->delete();

		$array = array(
			array(
					'rookies_id' => '1',
					'video_id' => '1'
			),
			array(
					'rookies_id' => '2',
					'video_id' => '2'
			),
			array(
					'rookies_id' => '3',
					'video_id' => '3'
			)
		);

		// Uncomment the below to run the seeder
		DB::table('rookies_videos')->insert($array);
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