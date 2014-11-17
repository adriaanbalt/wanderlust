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

		$this->call('NavigationSubTableSeeder');
		$this->command->info('Navigation Sub finished!');


		$this->call('AboutTableSeeder');
		$this->command->info('About finished!');



		$this->call('JoinTableSeeder');
		$this->command->info('Join finished!');



		$this->call('ImageTableSeeder');
		$this->command->info('Image finished!');
		$this->call('ImagePhotosTableSeeder');
		$this->command->info('Image Photos finished!');

		// $this->call('CommercialTableSeeder');
		// $this->command->info('Commercial finished!');
		// $this->call('CommercialPhotosTableSeeder');
		// $this->command->info('Commercial Photos finished!');

		$this->call('DevelopmentTableSeeder');
		$this->command->info('Development finished!');
		$this->call('DevelopmentPhotosTableSeeder');
		$this->command->info('Development Photos finished!');

		

		$this->call('UpdatedImageTableSeeder');
		$this->command->info('Updated Image!');



		$this->call('UpdatedDevelopmentTableSeeder');
		$this->command->info('Updated Development!');
		


		$this->call('PivotImagePhotosBoardTableSeeder');
		$this->command->info('Pivot Image Photos Board finished!');



	}

}