<?php

class PivotDevelopmentPhotosBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('development_photos_board')->delete();

		$array = array(
			array(
					'photo_id' => '12',
					'development_id' => '2'
			),
			array(
					'photo_id' => '13',
					'development_id' => '1'
			),
			array(
					'photo_id' => '14',
					'development_id' => '2'
			),
			array(
					'photo_id' => '15',
					'development_id' => '3'
			),
			array(
					'photo_id' => '16',
					'development_id' => '3'
			),
			array(
					'photo_id' => '17',
					'development_id' => '2'
			),
			array(
					'photo_id' => '18',
					'development_id' => '1'
			),
			array(
					'photo_id' => '19',
					'development_id' => '3'
			),
			array(
					'photo_id' => '20',
					'development_id' => '1'
			),
			array(
					'photo_id' => '1',
					'development_id' => '1'
			),
			array(
					'photo_id' => '2',
					'development_id' => '1'
			),
			array(
					'photo_id' => '3',
					'development_id' => '1'
			),
			array(
					'photo_id' => '4',
					'development_id' => '2'
			),
			array(
					'photo_id' => '5',
					'development_id' => '3'
			),
			array(
					'photo_id' => '6',
					'development_id' => '2'
			),
			array(
					'photo_id' => '7',
					'development_id' => '1'
			),
			array(
					'photo_id' => '8',
					'development_id' => '1'
			),
			array(
					'photo_id' => '9',
					'development_id' => '3'
			)
		);

		
		DB::table('development_photos_board')->insert($array);
	}

}


/*
	$table->foreign('development_id')
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