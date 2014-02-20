<?php

class JoinTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('join')->delete();

		$array = array(
			array(
					'first_name' => 'Girl',
					'last_name' => 'One',
					'address' => '123 Happy Lane',
					'apt' => '#1',
					'city' => 'New York',
					'state' => 'NY',
					'country' => 'USA',
					'zipcode' => '10013',
					'telephone' => '2125555555',
					'email' => 'test@test.com',
					'gender' => 'female',
					'birthday' => '01/02/03',
					'comments' => 'These are a bunch of comments!',
					'picture' => 'path_to_url'
			),
			array(
					'first_name' => 'Boy',
					'last_name' => 'One',
					'address' => '123 Happy Lane',
					'apt' => '#1',
					'city' => 'New York',
					'state' => 'NY',
					'country' => 'USA',
					'zipcode' => '10013',
					'telephone' => '2125555555',
					'email' => 'test@test.com',
					'gender' => 'female',
					'birthday' => '01/02/03',
					'comments' => 'These are a bunch of comments!',
					'picture' => 'path_to_url'
			),
			array(
					'first_name' => 'Girl',
					'last_name' => 'Two',
					'address' => '123 Happy Lane',
					'apt' => '#1',
					'city' => 'New York',
					'state' => 'NY',
					'country' => 'USA',
					'zipcode' => '10013',
					'telephone' => '2125555555',
					'email' => 'test@test.com',
					'gender' => 'female',
					'birthday' => '01/02/03',
					'comments' => 'These are a bunch of comments!',
					'picture' => 'path_to_url'
			),
			array(
					'first_name' => 'Boy',
					'last_name' => 'Two',
					'address' => '123 Happy Lane',
					'apt' => '#1',
					'city' => 'New York',
					'state' => 'NY',
					'country' => 'USA',
					'zipcode' => '10013',
					'telephone' => '2125555555',
					'email' => 'test@test.com',
					'gender' => 'female',
					'birthday' => '01/02/03',
					'comments' => 'These are a bunch of comments!',
					'picture' => 'path_to_url'
			)
		);

		
		DB::table('join')->insert($array);
	}

}


/*

$table->string('first_name');
$table->string('last_name');
$table->string('address');
$table->string('apt');
$table->string('city');
$table->string('state');
$table->string('country');
$table->string('zipcode');
$table->string('telephone');
$table->string('email');
$table->boolean('gender');
$table->string('birthday');
$table->string('comments');
$table->string('picture');

*/