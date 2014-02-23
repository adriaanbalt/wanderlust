<?php

class SomegirlsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('somegirls')->delete();

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
					'eyes' => 'eyes',
					'photocover_id' => 1
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
					'eyes' => 'eyes',
					'photocover_id' => 2
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
					'eyes' => 'eyes',
					'photocover_id' => 3
			),

			array(
					'slug' => 'chelsea',
					'name' => 'Chelsea',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes',
					'photocover_id' => 4
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
					'eyes' => 'eyes',
					'photocover_id' => 5
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
					'eyes' => 'eyes',
					'photocover_id' => 6
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
					'eyes' => 'eyes',
					'photocover_id' => 7
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
					'eyes' => 'eyes',
					'photocover_id' => 8
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
					'eyes' => 'eyes',
					'photocover_id' => 9
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
					'eyes' => 'eyes',
					'photocover_id' => 10
			)
		);

		
		DB::table('somegirls')->insert($array);
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