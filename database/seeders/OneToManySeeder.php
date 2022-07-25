<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class OneToManySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Post::factory(3)
			->hasComments(5)
			->create();
	}
}