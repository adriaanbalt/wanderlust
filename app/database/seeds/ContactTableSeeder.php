<?php

class ContactTableSeeder extends Seeder {

	public function run()
	{
		DB::table('contact')->delete();

		$array = array(
			array(
					'telephone' => '414.702.8225',
					'fax' => '',
					'email' => 'info@wanderlustmgmt.com',
					'address' => '1815 Purdy Ave., Miami Beach 33139'
			)
		);

		DB::table('contact')->insert($array);
	}

}


/*
    $table->string('telephone');
    $table->string('fax');
    $table->string('email');
    $table->string('address');
*/