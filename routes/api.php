<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(UserController::class)->group(function () {
	Route::get('users', 'index')->name('users.index');
	// Endpoints for One to One Relationship
	Route::get('users/{user}', 'get')->name('users.get');
	Route::get('users/{user}/phone', 'phone')->name('users.phone');
});

// Endpoints for One to Many Relationship
Route::controller(UserController::class)->group(function () {
	Route::get('posts', 'index')->name('posts.index');
	Route::get('posts/{post}', 'get')->name('posts.get');
	Route::get('posts/{post}/comments', 'comments')->name('posts.comments');
});

Route::controller(UserController::class)->group(function () {
	// Endpoints for Many to Many Relationship
	Route::get('users/{user}/roles', 'roles')->name('users.roles');
});
