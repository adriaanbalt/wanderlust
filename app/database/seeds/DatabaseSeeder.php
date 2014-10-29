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

		$this->call('ArtistsTableSeeder');
		$this->command->info('Artists finished!');


		$this->call('WomenPhotosTableSeeder');
		$this->command->info('Women Photos finished!');

		$this->call('ArtistsPhotosTableSeeder');
		$this->command->info('Artists Photos finished!');



		$this->call('UpdatedWomenTableSeeder');
		$this->command->info('Updated Women!');


		$this->call('UpdatedArtistsTableSeeder');
		$this->command->info('Updated Artists!');
		



		$this->call('PivotWomenPhotosBoardTableSeeder');
		$this->command->info('Pivot Women Photos Board finished!');


		$this->call('PivotArtistsPhotosBoardTableSeeder');
		$this->command->info('Pivot Artists Photos finished!');

	}

}