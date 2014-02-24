<?php

class DevelopmentTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('development')->delete();

		$array = array(

			array(
					'slug' => 'maria',
					'name' => 'Maria',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			),

			array(
					'slug' => 'maria',
					'name' => 'Maria',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			),

			array(
					'slug' => 'chelsea',
					'name' => 'Chelsea',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			),

			array(
					'slug' => 'chelsea',
					'name' => 'Chelsea',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			),

			array(
					'slug' => 'maria',
					'name' => 'Maria',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			),

			array(
					'slug' => 'irina',
					'name' => 'Irina',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			),

			array(
					'slug' => 'irina',
					'name' => 'Irina',
					'height' => '',
					'bust' => '',
					'waist' => '',
					'hips' => '',
					'shoes' => '',
					'hair' => '',
					'eyes' => '',
					'photocover_id' => null
			)
		);

		
		DB::table('development')->insert($array);
	}

}


/*
    $table->string('slug');
    $table->string('name');
    $table->string('height');
    $table->string('bust');
    $table->string('waist');
    $table->string('hips');
    $table->string('shoes');
    $table->string('hair');
    $table->string('eyes');
*/