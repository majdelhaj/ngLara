<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
        User::create( array(
            'username'=>'majd',
            'password'=>Hash::make('majd'),
            'name'=>'Majd Alhaj'
        ));
	}

}