<?php

use App\Models\User;

class AdminSeeder extends DatabaseSeeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('groups')->truncate();
		DB::table('users_groups')->truncate();

		Sentry::getUserProvider()->create(array(
			'email'       => 'jcorrego@gmail.com',
			'password'    => "admin",
			'first_name'  => 'Juan C.',
			'last_name'   => 'Orrego',
			'activated'   => 1,
		));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Admin',
			'permissions' => array('admin' => 1),
		));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'User',
			'permissions' => array('admin' => 0),
		));

		// Assign user permissions
		$adminUser  = Sentry::getUserProvider()->findByLogin('jcorrego@gmail.com');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admin');
		$adminUser->addGroup($adminGroup);
	}

}