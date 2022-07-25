<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use HasFactory;

	protected $guarded = ['id'];

	protected $with = ['comments'];

	/**
	 * Get the comments for the blog post.
	 */
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
