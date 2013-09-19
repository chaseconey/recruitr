<?php

class AppsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('apps')->truncate();

		$apps = array(
            "first_name" => "Chase",
            "last_name" => "Coney",
            "about" => "About me",
            "career" => "Career thing...",
            "project" => "Made a bunny",
            "resume_loc" => "rawr.docxxxx",
            "user_id" => 1
		);

		// Uncomment the below to run the seeder
		DB::table('apps')->insert($apps);
	}

}
