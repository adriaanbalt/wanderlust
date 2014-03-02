<?php

class PivotWomenPhotosBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('women_photos_board')->delete();

		$array = array(
			array(
					'photo_id' => '1',
					'women_id' => '1',
					'board_id' => '1'
			),
			array(
					'photo_id' => '2',
					'women_id' => '1',
					'board_id' => '2'
			),
			array(
					'photo_id' => '3',
					'women_id' => '1',
					'board_id' => '3'
			),
			array(
					'photo_id' => '4',
					'women_id' => '2',
					'board_id' => '4'
			),
			array(
					'photo_id' => '5',
					'women_id' => '3',
					'board_id' => '5'
			),
			array(
					'photo_id' => '6',
					'women_id' => '2',
					'board_id' => '6'
			),
			array(
					'photo_id' => '7',
					'women_id' => '1',
					'board_id' => '7'
			),
			array(
					'photo_id' => '8',
					'women_id' => '1',
					'board_id' => '8'
			),
			array(
					'photo_id' => '9',
					'women_id' => '3',
					'board_id' => '9'
			),
			array(
					'photo_id' => '12',
					'women_id' => '2',
					'board_id' => '10'
			),
			array(
					'photo_id' => '13',
					'women_id' => '1',
					'board_id' => '11'
			),
			array(
					'photo_id' => '14',
					'women_id' => '2',
					'board_id' => '12'
			),
			array(
					'photo_id' => '15',
					'women_id' => '3',
					'board_id' => '13'
			),
			array(
					'photo_id' => '16',
					'women_id' => '3',
					'board_id' => '14'
			),
			array(
					'photo_id' => '17',
					'women_id' => '2',
					'board_id' => '15'
			),
			array(
					'photo_id' => '18',
					'women_id' => '1',
					'board_id' => '16'
			),
			array(
					'photo_id' => '19',
					'women_id' => '3',
					'board_id' => '17'
			),
			array(
					'photo_id' => '20',
					'women_id' => '1',
					'board_id' => '18'
			)
		);

		
		DB::table('women_photos_board')->insert($array);
	}

}
