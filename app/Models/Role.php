<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	use HasFactory;

	protected $guarded = ['id'];

	/**
	 * The users that belong to the role.
	 */
	public function users()
	{
		/*
		* Laravel automaticly finds pivot table according to conventions.
		* since according to conventions it should be singular form of both tables combined by _
		* in alphabetical order. so pivot table name should be role_user and NOT user_role.
		*
		* in our case the code below would be the same if we wrote this:
		* 		return $this->belongsToMany(User::class,'role_user','role_id', 'user_id');
		*
		* if you want to use a custom name for pivot table you would pass the specified name
		* as a second argument to belongsToMany method.
		*
		* read more in documentation: https://laravel.com/docs/9.x/eloquent-relationships#many-to-many-model-structure
		*/

		return $this->belongsToMany(User::class);
	}
}
