<?php

class PivotImagePhotosBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('image_photos_board')->delete();

		$array = array(
			array(
					'photo_id' => '1',
					'image_id' => '1'
			),
			array(
					'photo_id' => '2',
					'image_id' => '2'
			),
			array(
					'photo_id' => '3',
					'image_id' => '3'
			),
			array(
					'photo_id' => '4',
					'image_id' => '2'
			),
			array(
					'photo_id' => '5',
					'image_id' => '1'
			),
			array(
					'photo_id' => '6',
					'image_id' => '2'
			),
			array(
					'photo_id' => '7',
					'image_id' => '1'
			),
			array(
					'photo_id' => '8',
					'image_id' => '1'
			),
			array(
					'photo_id' => '9',
					'image_id' => '3'
			),
			array(
					'photo_id' => '12',
					'image_id' => '2'
			),
			array(
					'photo_id' => '13',
					'image_id' => '1'
			),
			array(
					'photo_id' => '14',
					'image_id' => '2'
			),
			array(
					'photo_id' => '15',
					'image_id' => '3'
			),
			array(
					'photo_id' => '16',
					'image_id' => '3'
			),
			array(
					'photo_id' => '17',
					'image_id' => '2'
			),
			array(
					'photo_id' => '18',
					'image_id' => '1'
			),
			array(
					'photo_id' => '19',
					'image_id' => '3'
			),
			array(
					'photo_id' => '20',
					'image_id' => '1'
			)
		);

		
		DB::table('image_photos_board')->insert($array);
	}

}


/*
	$table->foreign('image_id')
		->references('id')
		->on('image')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('photo_id')
		->references('id')
		->on('photos')
		->on_delete('restrict')
		->on_update('cascade');
*/