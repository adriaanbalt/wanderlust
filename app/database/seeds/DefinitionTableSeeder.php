<?php

class DefinitionTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('definition')->delete();

		$array = array(
			array(
					'row' => 'wan der lust'
			),
			array(
					'row' => '[won-der-lust]'
			),
			array(
					'row' => 'noun'
			),
			array(
					'row' => 'a great desire to travel and rove about'
			)
		);

		
		DB::table('definition')->insert($array);
	}

}
