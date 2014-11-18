<?php

class ImagePhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('image_photos')->delete();

		$array = array(
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/IMG_7021R.jpg',
					'image_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/0-cover-bw.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/26_b.jpg',
					'image_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira-Karlova_28.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/chelseaTHUMB.jpg',
					'image_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/12.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/SCAN0022.JPG',
					'image_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Irina-lips.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg',
					'image_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/grayscale-overals.jpg',
					'image_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/gynaika3.jpg',
					'image_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => "images/models/maria/N'Style8.jpg",
					'image_id' => '3',
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Ira-Karlova_54.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/Untitled-1.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/irina/bw-10.jpg',
					'image_id' => '2'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/545662_287306998036739_643155477_n.jpg',
					'image_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/582281_219892948111478_1884718799_n.jpg',
					'image_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/chelsea/602722_392959850804786_658364444_n.jpg',
					'image_id' => '1'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/elle-slovenia-03.jpg',
					'image_id' => '3'
			),
			array(
					'title' => '',
					'slug' => '',
					'path' => 'images/models/maria/eurowoman-may-2011.jpg',
					'image_id' => '3'
			)
		);

		
		DB::table('image_photos')->insert($array);
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/