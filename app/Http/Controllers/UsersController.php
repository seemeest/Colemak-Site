<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UsersController extends Controller
{
	public function show(Request $request)
	{
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		if (!$user) {
			return response()->json()->setStatusCode(404);
		}

		return response()->json($user);
	}

}
