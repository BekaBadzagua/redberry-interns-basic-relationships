<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
	public function index(): JsonResponse
	{
		$users = User::without(['phone', 'roles'])->get();
		return response()->json($users, 200);
	}

	public function get(User $user): JsonResponse
	{
		return response()->json($user, 200);
	}

	public function phone(User $user): JsonResponse
	{
		return response()->json($user->phone, 200);
	}
	public function roles(User $user): JsonResponse
	{
		return response()->json($user->roles, 200);
	}
}
