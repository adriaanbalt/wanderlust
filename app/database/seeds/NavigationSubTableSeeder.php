<?php

class NavigationSubTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('navigationsub')->delete();

		$array = array(
			array(
					'title' => 'Image',
					'slug'  => 'image',
					'navigation_id' => 1
			),
			array(
					'title' => 'Commercial',
					'slug'  => 'commercial',
					'navigation_id' => 1
			),
			array(
					'title' => 'Develop',
					'slug'  => 'develop',
					'navigation_id' => 1
			),
			array(
					'title' => 'DJ',
					'slug'  => 'dj',
					'navigation_id' => 2
			),
			array(
					'title' => 'Photographers',
					'slug'  => 'photographers',
					'navigation_id' => 2
			),
			array(
					'title' => 'Artists',
					'slug'  => 'artists',
					'navigation_id' => 2
			)
		);

		
		DB::table('navigationsub')->insert($array);
	}

}
