<?php

class RangesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('ranges')->truncate();

		$ranges = array(
            array('range' => 'Less than $35,000'),
            array('range' => '$35,000 - $45,000'),
            array('range' => '$45,000 - $55,000'),
            array('range' => '$55,000 - $65,000'),
            array('range' => '$65,000 - $75,000'),
            array('range' => 'More than $75,000'),
		);

		// Uncomment the below to run the seeder
		DB::table('ranges')->insert($ranges);
	}

}
