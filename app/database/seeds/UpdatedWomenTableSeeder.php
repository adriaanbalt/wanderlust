<?php

class UpdatedWomenTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 1; $i <= DB::table('women')->count()+1; $i++ ){
			$index = ceil( $i%DB::table('women_photos')->count() );
			DB::table('women')
				->where('id', $index)
				->update(array( 'photocover_id' => $index ));
		}
	}

}

