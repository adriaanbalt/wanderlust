<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info('HERE WE GO!');

		$this->command->info('Navigation next!');
		$this->call('NavigationTableSeeder');

		$this->command->info('About next!');
		$this->call('AboutTableSeeder');

		$this->command->info('Join next!');
		$this->call('JoinTableSeeder');

		$this->command->info('Contact next!');
		$this->call('ContactTableSeeder');

		$this->command->info('Photos next!');
		$this->call('PhotosTableSeeder');

		$this->command->info('Videos next!');
		$this->call('VideosTableSeeder');


		$this->command->info('Definition next!');
		$this->call('DefinitionTableSeeder');


		$this->command->info('Some Girls next!');
		$this->call('SomegirlsTableSeeder');

		$this->command->info('Rookies next!');
		$this->call('RookiesTableSeeder');

		// $this->call('MusiciansTableSeeder');
		// $this->command->info('Musicians seeded!');
		

		$this->command->info('Pivot Some Girls Photos next!');
		$this->call('PivotSomegirlsPhotosTableSeeder');


		$this->command->info('Pivot Rookies Photos next!');
		$this->call('PivotRookiesPhotosTableSeeder');


		$this->command->info('Pivot Some Girls Videos next!');
		$this->call('PivotSomegirlsVideosTableSeeder');
		

		$this->command->info('Pivot Rookies Videos next!');
		$this->call('PivotRookiesVideosTableSeeder');


	}

}