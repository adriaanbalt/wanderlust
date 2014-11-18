<?php

class NavigationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('navigation')->delete();

		$array = array(
			array(
					'title' => 'Models',
					'slug'  => 'models'
			),
			array(
					'title' => 'Artists',
					'slug'  => 'artists'
			),
			array(
					'title' => 'About',
					'slug'  => 'about'
			),
			array(
					'title' => 'Join',
					'slug'  => 'join'
			)
		);

		
		DB::table('navigation')->insert($array);
	}

}
