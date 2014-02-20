<?php

class MusiciansTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('models')->delete();

		$array = array(
			array(
					'slug' => 'chelsea',
					'name' => 'Chelsea',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes'
			),

			array(
					'slug' => 'Irina',
					'name' => 'Irina',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes'
			),

			array(
					'slug' => 'Maria',
					'name' => 'Maria',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes'
			)
		);

		
		DB::table('models')->insert($array);
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