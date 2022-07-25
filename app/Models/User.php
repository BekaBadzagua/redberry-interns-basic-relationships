<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use HasFactory;

	protected $guarded = ['id'];

	protected $with = ['phone', 'roles'];

	/**
	 * Get the phone associated with the user.
	 */
	public function phone()
	{
		/*
		* Laravel automaticly finds foreign key, according to conventions.
		* So the code below is the same as the following one:
		*
		* return $this->hasOne(Phone::class, 'user_id', 'id');
		*
		* read more in documentation: https://laravel.com/docs/9.x/eloquent-relationships#one-to-one
		*/
		return $this->hasOne(Phone::class);
	}

	/**
	 * The roles that belong to the user.
	 */
	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
}
