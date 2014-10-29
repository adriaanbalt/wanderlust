<?php

class UpdatedArtistsTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 1; $i <= DB::table('artists')->count()+1; $i++ ){
			$index = ceil( $i%DB::table('artists_photos')->count() );
			DB::table('artists')
				->where('id', $index)
				->update(array( 'photocover_id' => $index ));
		}
	}

}

