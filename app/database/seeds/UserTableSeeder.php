<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(
            array(
                'name'     => 'Chase Coney',
                'email'    => 'chase.coney@gmail.com',
                'password' => Hash::make('rawr'),
                'admin' => 1
            )
        );
    }

}