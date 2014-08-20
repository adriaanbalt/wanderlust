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




		$this->call('DefinitionTableSeeder');
		$this->command->info('Definition finished!');




		$this->call('WomenTableSeeder');
		$this->command->info('Women finished!');

		$this->call('DevelopmentTableSeeder');
		$this->command->info('Development finished!');


		$this->call('WomenPhotosTableSeeder');
		$this->command->info('Women Photos finished!');

		$this->call('DevelopmentPhotosTableSeeder');
		$this->command->info('Development Photos finished!');



		$this->call('UpdatedWomenTableSeeder');
		$this->command->info('Updated Women!');


		$this->call('UpdatedDevelopmentTableSeeder');
		$this->command->info('Updated Development!');
		



		$this->call('PivotWomenPhotosBoardTableSeeder');
		$this->command->info('Pivot Women Photos Board finished!');


		$this->call('PivotDevelopmentPhotosBoardTableSeeder');
		$this->command->info('Pivot Development Photos finished!');

	}

}