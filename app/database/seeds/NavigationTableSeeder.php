<?php

class NavigationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('navigation')->delete();

		$array = array(
			array(
					'title' => 'women',
					'slug'  => 'women'
			),
			array(
					'title' => 'new faces',
					'slug'  => 'new-faces'
			),
			array(
					'title' => 'backstage',
					'slug'  => 'backstage'
			),
			array(
					'title' => 'join',
					'slug'  => 'join'
			)
		);

		
		DB::table('navigation')->insert($array);
	}

}
