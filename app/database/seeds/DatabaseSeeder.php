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

		// $this->call('NavigationTableSeeder');
		// $this->command->info('Navigation seeded!');

		// $this->call('SubNavigationTableSeeder');
		// $this->command->info('SubNavigation seeded!');


		$this->call('PhotosTableSeeder');
		$this->command->info('Photos seeded!');

		$this->call('VideosTableSeeder');
		$this->command->info('Videos seeded!');


		$this->call('ModelsTableSeeder');
		$this->command->info('Models seeded!');

		// $this->call('MusiciansTableSeeder');
		// $this->command->info('Musicians seeded!');
		

		$this->call('PivotModelsPhotosTableSeeder');
		$this->command->info('Pivot Models Photos seeded!');

		$this->call('PivotModelsVideosTableSeeder');
		$this->command->info('Pivot Models Videos seeded!');


	}

}