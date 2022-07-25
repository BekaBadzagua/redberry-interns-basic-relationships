<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
	private $ROLE_VALUES = ['admin', 'owner', 'member', 'guest'];

	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		$USERS = 5;
		$POSTS = 3;
		$COMMENTS_PER_POST = 3;

		# Execute in Any environment
		foreach ($this->ROLE_VALUES as $role)
		{
			Role::create(['name'=>$role]);
		}

		# Execute only in local environment
		if (App::environment('local'))
		{
			Post::factory()
				->count($POSTS)
				->hasComments($COMMENTS_PER_POST)
				->create();

			$users = User::factory()
				->count($USERS)
				->hasPhone()
				->create();

			$this->attachRolesToUsers($users);
		}
	}

	/*
	* Attaches random number of roles for users
	*/
	private function attachRolesToUsers(Collection $users): void
	{
		foreach ($users as $user)
		{
			$numberOfRoles = random_int(1, count($this->ROLE_VALUES));
			$roles = Role::inRandomOrder()->limit($numberOfRoles)->get();
			$user->roles()->attach($roles);
		}
	}
}
