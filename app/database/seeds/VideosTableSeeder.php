<?php

class VideosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('videos')->delete();

		$array = array(
			array(
					'title' => 'video 1',
					'slug' => 'video1',
					'path' => 'images/models/chelsea/0-cover.jpg'
			),
			array(
					'title' => 'video 2',
					'slug' => 'video2',
					'path' => 'images/models/chelsea/0-cover.jpg'
			),
			array(
					'title' => 'video 3',
					'slug' => 'video3',
					'path' => 'images/models/chelsea/0-cover.jpg'
			)
		);

		
		DB::table('videos')->insert($array);
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/