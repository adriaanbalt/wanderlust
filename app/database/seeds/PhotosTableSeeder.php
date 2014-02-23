<?php

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('photos')->delete();

		$array = array(
			array(
					'title' => 'photo 1',
					'slug' => 'cover',
					'path' => 'images/models/chelsea/0-cover-bw.jpg'
			),
			array(
					'title' => 'photo 2',
					'slug' => 'cover',
					'path' => 'images/models/irina/0-cover-bw.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/maria/0-cover-bw.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/irina/Ira Karlova_28.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/chelsea/chelseaTHUMB.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/irina/_MG_8462.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/maria/Exame00.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/irina/IrinaLips-9-2012.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/chelsea/grayscale-overals.jpg'
			)
		);

		
		DB::table('photos')->insert($array);
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/