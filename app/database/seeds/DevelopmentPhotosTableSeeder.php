<?php

class ArtistsPhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('artists_photos')->delete();

		$array = array(
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/0-cover.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/0-cover-bw.jpg',
					'artists_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/26_b.jpg',
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira-Karlova_28.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/chelseaTHUMB.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/12.jpg',
					'artists_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/SCAN0022.JPG',
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Irina-lips.jpg',
					'artists_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg',
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/grayscale-overals.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/gynaika3.jpg',
					'artists_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => "images/models/maria/N'Style8.jpg",
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira-Karlova_54.jpg',
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Untitled-1.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/bw-10.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg',
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/582281_219892948111478_1884718799_n.jpg',
					'artists_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/602722_392959850804786_658364444_n.jpg',
					'artists_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/elle-slovenia-03.jpg',
					'artists_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/eurowoman-may-2011.jpg',
					'artists_id' => '1'
			)
		);

		
		DB::table('artists_photos')->insert($array);
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/