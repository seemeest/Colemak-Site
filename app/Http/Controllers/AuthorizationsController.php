<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthorizationsController extends Controller
{
    public function login(Request $request)
    {
		$data['email'] = $request->get('email');
		$data['password'] = $request->get('password');

		$validation = Validator::make($data, [
			'email' => 'required|email',
			'password' => 'required',
		]);

		$validation->validate();

		$user = User::where('email', '=', $validation->valid()['email'])->get()->first();

		if ($user && Hash::check($validation->valid()['password'], $user["password"])) {

			$user->token = Str::random(60);
			$user->save();

			return response()->json($user);
		}

		return response()->json(["email" => ["email or password not correct"]]);
    }

	public function registration(Request $request)
	{
		$data['name'] = $request->get('name');
		$data['surname'] = $request->get('surname');
		$data['email'] = $request->get('email');
		$data['password'] = $request->get('password');
		$data['repeatPassword'] = $request->get('repeatPassword');

		$validation = Validator::make(
			$data,
			[
				'name' => 'required|unique:users,name',
				'surname' => 'string|nullable',
				'email' => 'required|email:rfc|unique:users,email|regex:/(.+)@(.+)\.(.+)/i',
				'password' => 'required',
				'repeatPassword' => 'required|same:password',
			]
		);

		$validation->validate();

		$data = $validation->valid();

		$user = User::create(["name" => $data['name'], "email" => $data['email'], "surname" => $data['surname'], "password" => bcrypt($data['password']), "token" => Str::random(60)]);

		return response()->json($user);
	}

	public function logout(Request $request)
	{
		$user = User::where('token', '=', $request->bearerToken())->select()->first();

		$user->token = null;
		$user->save();

		return response()->json(null);
	}
}
