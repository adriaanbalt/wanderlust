<?php

class PivotSomegirlsPhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('somegirls_photos')->delete();

		$array = array(
			array(
					'somegirls_id' => 1,
					'photo_id' => 1
			),
			array(
					'somegirls_id' => 2,
					'photo_id' => 2
			),
			array(
					'somegirls_id' => 3,
					'photo_id' => 3
			)
		);

		
		DB::table('somegirls_photos')->insert($array);
	}

}


/*
	$table->foreign('somegirls_id')
		->references('id')
		->on('somegirls')
		->on_delete('restrict')
		->on_update('cascade');
	
	$table->foreign('photo_id')
		->references('id')
		->on('photos')
		->on_delete('restrict')
		->on_update('cascade');
*/