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


		$this->command->info('Videos next!');
		$this->call('VideosTableSeeder');


		$this->command->info('Definition next!');
		$this->call('DefinitionTableSeeder');


		$this->command->info('Women next!');
		$this->call('WomenTableSeeder');

		$this->command->info('Development next!');
		$this->call('DevelopmentTableSeeder');


		$this->command->info('Photos next!');
		$this->call('PhotosTableSeeder');


		$this->call('UpdatedWomenTableSeeder');
		$this->command->info('Updated Women seeded!');
		

		$this->command->info('Pivot Some Girls Photos next!');
		$this->call('PivotWomenPhotosTableSeeder');


		$this->command->info('Pivot Development Photos next!');
		$this->call('PivotdevelopmentPhotosTableSeeder');


		$this->command->info('Pivot Some Girls Videos next!');
		$this->call('PivotWomenVideosTableSeeder');
		

		$this->command->info('Pivot Development Videos next!');
		$this->call('PivotdevelopmentVideosTableSeeder');


	}

}