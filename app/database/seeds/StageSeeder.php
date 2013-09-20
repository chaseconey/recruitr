<?php

class StageSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('stages')->truncate();

        $stages = array(
            array(
                "stage" => "screening",
                "friendly" => "Screening"
            ),
            array(
                "stage" => "phone",
                "friendly" => "Phone Interview"
            ),
            array(
                "stage" => "face_to_face",
                "friendly" => "PHP Quiz / In-Person Interview"
            ),
            array(
                "stage" => "cultural",
                "friendly" => "Cultural Interview"
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('stages')->insert($stages);
    }

}
