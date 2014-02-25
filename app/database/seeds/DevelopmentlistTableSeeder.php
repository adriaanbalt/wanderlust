<?php

class DevelopmentlistTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('developmentlist')->delete();

		$array = array(
			array(
					'women_id' => '1'
			),
			array(
					'women_id' => '2'
			),
			array(
					'women_id' => '3'
			),
			array(
					'women_id' => '4'
			),
			array(
					'women_id' => '5'
			),
			array(
					'women_id' => '6'
			),
			array(
					'women_id' => '7'
			),
			array(
					'women_id' => '8'
			),
			array(
					'women_id' => '9'
			),
			array(
					'women_id' => '12'
			),
			array(
					'women_id' => '13'
			),
			array(
					'women_id' => '14'
			),
			array(
					'women_id' => '15'
			),
			array(
					'women_id' => '16'
			),
			array(
					'women_id' => '17'
			),
			array(
					'women_id' => '18'
			),
			array(
					'women_id' => '19'
			),
			array(
					'women_id' => '20'
			),
		);

		
		DB::table('developmentlist')->insert($array);
	}

}
