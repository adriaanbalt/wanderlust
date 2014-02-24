<?php

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('photos')->delete();

		$array = array(
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/0-cover-bw.jpg'
			),
			array(
					'title' => 'photo 2',
					'slug' => '',
					'path' => 'images/models/irina/0-cover-bw.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/0-cover-bw.JPG'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira Karlova_28.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/chelseaTHUMB.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Irina_8462.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/Exame00.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Irina-lips.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/grayscale-overals.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/gynaika3.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => "images/models/maria/N'Style8.jpg"
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira Karlova_54.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Bazaar-(4).jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/bw-10.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/412609_181239275313138_173462147_o.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/331298_121396404627800_1477408875_o.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/elle slovenia 03.jpg'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/eurowoman-may-2011.jpg'
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