<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function index(Request $request)
    {
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		$visitGroups = GroupUser::where('user_id', '=', $user->id)->get();
		$groups = Group::get();

		foreach ($groups as $group) {
			$group['isVisit'] = false;
		}

		foreach ($visitGroups as $visitGroup) {
			$groups->where('id', '=', $visitGroup->group_id)->first()->isVisit = true;
		}

		return response()->json($groups);
    }

    public function store(Request $request)
    {
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		$data['name'] = $request->get('name');
		$data['limit_money'] = $request->get('limit_money');

		Group::create(["name" => $data['name'], "limit_money" => $data['limit_money']]);
		$group = Group::get('id')->last();

		GroupUser::create(['user_id' => $user->id, 'group_id' => $group->id, 'to_user_id' => null, 'wish' => null, 'is_owner' => true]);

		return response()->json(Group::get()->last());
    }

	public function addUser(Request $request) {
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		$group_id = $request->get('group_id');

		GroupUser::create(['user_id' => $user->id, 'group_id' => $group_id, 'to_user_id' => null, 'wish' => null, 'is_owner' => false]);

		return response()->json(null);
	}

	public function leaveUser(Request $request) {
		$token = $request->bearerToken();

		$user_id = User::whereToken($token)->first()->id;

		$group_id = $request->get('group_id');

		$group_user_id = GroupUser::where('user_id', '=', $user_id)->where('group_id', '=', $group_id)->get('id')->first()->id;
		GroupUser::find($group_user_id)->delete();

		return response()->json(null);
	}

	public function startLottery(Request $request) {
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		$data['group_id'] = $request->get('group_id');

		if (!GroupUser::where('user_id', '=', $user->id)->where('group_id', '=', $data['group_id'])->get()->first()->is_owner) {
			return response()->json("Not enough permissions.")->setStatusCode(403);
		}

		$countUsers = GroupUser::where('group_id', '=', $data['group_id'])->get()->count();

		if ($countUsers < 2) {
			return response()->json("Not enough users.")->setStatusCode(403);
		}

		$usersGroup = GroupUser::where('group_id', '=', $data['group_id'])->get(['id', 'user_id', 'group_id', 'to_user_id']);

		for ($i = 0; $i < $countUsers - 1; $i++) {
			$usersGroup[$i]->to_user_id = $usersGroup[$i + 1]->user_id;
			$usersGroup[$i]->save();
		}
		$usersGroup[$countUsers - 1]->to_user_id = $usersGroup[0]->user_id;
		$usersGroup[$countUsers - 1]->save();

		return response()->json($usersGroup);
	}

	public function getToGift(Request $request) {
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		$visitGroups = GroupUser::where('user_id', '=', $user->id)->get();

		$data = [];
		foreach ($visitGroups as $visitGroup) {
			$to_user_id = $visitGroup->to_user_id;

			$fi = User::whereId($to_user_id)->get('name as firstname')->first()->toArray() + User::whereId($to_user_id)->get('surname')->first()->toArray();
			$wish = GroupUser::where('group_id', '=', $visitGroup->group_id)->where('to_user_id', '=', $to_user_id)->get('wish')->first()->toArray();
			$group = Group::whereId($visitGroup->group_id)->get(['limit_money', 'name'])->first()->toArray();

			$data[] = $fi + $wish + $group;
		}

		return response()->json($data);
	}
}
