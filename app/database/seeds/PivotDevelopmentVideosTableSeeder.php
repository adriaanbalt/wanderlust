<?php

class PivotDevelopmentVideosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('development_videos')->delete();

		$array = array(
			array(
					'development_id' => '1',
					'video_id' => '1'
			),
			array(
					'development_id' => '2',
					'video_id' => '2'
			),
			array(
					'development_id' => '3',
					'video_id' => '3'
			)
		);

		
		DB::table('development_videos')->insert($array);
	}

}


/*
	$table->foreign('women_id')
		->references('id')
		->on('models')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('women_id')
		->references('id')
		->on('videos')
		->on_delete('restrict')
		->on_update('cascade');
*/