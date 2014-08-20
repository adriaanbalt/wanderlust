<?php

class UpdatedDevelopmentTableSeeder extends Seeder {

	public function run()
	{
		for( $i = 1; $i <= DB::table('development')->count()+1; $i++ ){
			$index = ceil( $i%DB::table('development_photos')->count() );
			DB::table('development')
				->where('id', $index)
				->update(array( 'photocover_id' => $index ));
		}
	}

}

