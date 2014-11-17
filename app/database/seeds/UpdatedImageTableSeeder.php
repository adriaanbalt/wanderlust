<?php

class UpdatedImageTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 1; $i <= DB::table('image')->count()+1; $i++ ){
			$index = ceil( $i%DB::table('image_photos')->count() );
			DB::table('image')
				->where('id', $index)
				->update(array( 'photocover_id' => $index ));
		}
	}

}

