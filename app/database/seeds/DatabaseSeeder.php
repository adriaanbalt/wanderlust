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

		$this->call('NavigationTableSeeder');
		$this->command->info('Navigation finished!');

		$this->call('AboutTableSeeder');
		$this->command->info('About finished!');

		
		$this->call('JoinTableSeeder');
		$this->command->info('Join finished!');

		$this->call('ContactTableSeeder');
		$this->command->info('Contact finished!');





		$this->call('VideosTableSeeder');
		$this->command->info('Videos finished!');


		$this->call('DefinitionTableSeeder');
		$this->command->info('Definition finished!');




		$this->call('WomenTableSeeder');
		$this->command->info('Women finished!');

		$this->call('DevelopmentTableSeeder');
		$this->command->info('Development finished!');


		$this->call('PhotosTableSeeder');
		$this->command->info('Photos finished!');




		$this->call('UpdatedWomenTableSeeder');
		$this->command->info('Updated Women!');


		$this->call('UpdatedDevelopmentTableSeeder');
		$this->command->info('Updated Development!');
		



		$this->call('PivotWomenPhotosTableSeeder');
		$this->command->info('Pivot Some Girls Photos finished!');


		$this->call('PivotdevelopmentPhotosTableSeeder');
		$this->command->info('Pivot Development Photos finished!');


		$this->call('PivotWomenVideosTableSeeder');
		$this->command->info('Pivot Some Girls Videos finished!');
		

		$this->call('PivotdevelopmentVideosTableSeeder');
		$this->command->info('Pivot Development Videos finished!');


	}

}