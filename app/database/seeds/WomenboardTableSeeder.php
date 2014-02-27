<?php

class WomenBoardTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('womenboard')->delete();

		$array = array(
			array(
					'board_id' => '1'
			),
			array(
					'board_id' => '2'
			),
			array(
					'board_id' => '3'
			),
			array(
					'photo_id' => '4',
			),
			array(
					'board_id' => '5'
			),
			array(
					'board_id' => '6'
			),
			array(
					'board_id' => '7'
			),
			array(
					'board_id' => '8'
			),
			array(
					'board_id' => '9'
			),
			array(
					'board_id' => '10'
			),
			array(
					'board_id' => '11'
			),
			array(
					'board_id' => '12'
			),
			array(
					'board_id' => '13'
			),
			array(
					'board_id' => '14'
			),
			array(
					'board_id' => '15'
			),
			array(
					'board_id' => '16'
			),
			array(
					'board_id' => '17'
			),
			array(
					'board_id' => '18'
			)
		);

		DB::table('womenboard')->insert($array);
	}

}
