<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
	use HasFactory;

	protected $guarded = ['id'];

	/**
	 * Get the user that owns the phone.
	 */
	public function user()
	{
		/*
		* belongsTo Vs hasMany
        *
		* belongsTo - is used with the table that contains Foreign Key.
		* hasMany - is use with the table that does NOT contain Foreign Key.
        *
        * in this case phones table has user_id Foreign Key. so we use belongsTo.
		*/
		return $this->belongsTo(User::class);
	}
}
