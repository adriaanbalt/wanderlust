<?php

class PivotArtistsPhotosBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('artists_photos_board')->delete();

		$array = array(
			array(
					'photo_id' => '12',
					'artists_id' => '2'
			),
			array(
					'photo_id' => '13',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '14',
					'artists_id' => '2'
			),
			array(
					'photo_id' => '15',
					'artists_id' => '3'
			),
			array(
					'photo_id' => '16',
					'artists_id' => '3'
			),
			array(
					'photo_id' => '17',
					'artists_id' => '2'
			),
			array(
					'photo_id' => '18',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '19',
					'artists_id' => '3'
			),
			array(
					'photo_id' => '20',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '1',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '2',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '3',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '4',
					'artists_id' => '2'
			),
			array(
					'photo_id' => '5',
					'artists_id' => '3'
			),
			array(
					'photo_id' => '6',
					'artists_id' => '2'
			),
			array(
					'photo_id' => '7',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '8',
					'artists_id' => '1'
			),
			array(
					'photo_id' => '9',
					'artists_id' => '3'
			)
		);

		
		DB::table('artists_photos_board')->insert($array);
	}

}


/*
	$table->foreign('artists_id')
		->references('id')
		->on('models')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('photo_id')
		->references('id')
		->on('photos')
		->on_delete('restrict')
		->on_update('cascade');
*/