<?php

class PivotSomegirlsVideosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('somegirls_videos')->delete();

		$array = array(
			array(
					'somegirls_id' => '1',
					'video_id' => '1'
			),
			array(
					'somegirls_id' => '2',
					'video_id' => '2'
			),
			array(
					'somegirls_id' => '3',
					'video_id' => '3'
			)
		);

		
		DB::table('somegirls_videos')->insert($array);
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