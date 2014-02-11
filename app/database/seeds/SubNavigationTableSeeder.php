<?php

class SubNavigationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('subnavigation')->delete();

		$array = array(
			array(
					'title' => 'MODELS',
					'slug'  => 'models',
					'nav_id' => 1
			),
			array(
					'title' => 'MUSICIANS',
					'slug'  => 'musicians',
					'nav_id' => 1
			)
		);

		// Uncomment the below to run the seeder
		DB::table('subnavigation')->insert($array);
	}

}