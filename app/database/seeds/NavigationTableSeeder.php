<?php

class NavigationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('navigation')->delete();

		$array = array(
			array(
					'title' => 'TALENT',
					'slug'  => 'talent'
			),
			array(
					'title' => 'ABOUT',
					'slug'  => 'about'
			),
			array(
					'title' => 'GUIDANCE',
					'slug'  => 'guidance'
			),
			array(
					'title' => 'JOIN',
					'slug'  => 'join'
			)
		);

		// Uncomment the below to run the seeder
		DB::table('navigation')->insert($array);
	}

}