<?php

class DevelopmentPhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('development_photos')->delete();

		$array = array(
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/0-cover.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/0-cover-bw.jpg',
					'development_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/26_b.jpg',
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira Karlova_28.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/chelseaTHUMB.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/12.jpg',
					'development_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/SCAN0022.JPG',
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Irina-lips.jpg',
					'development_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg',
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/grayscale-overals.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/gynaika3.jpg',
					'development_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => "images/models/maria/N'Style8.jpg",
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira Karlova_54.jpg',
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Untitled-1.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/bw-10.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg',
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/582281_219892948111478_1884718799_n.jpg',
					'development_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/602722_392959850804786_658364444_n.jpg',
					'development_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/elle slovenia 03.jpg',
					'development_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/eurowoman-may-2011.jpg',
					'development_id' => '1'
			)
		);

		
		DB::table('development_photos')->insert($array);
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/