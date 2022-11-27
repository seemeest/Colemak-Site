<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request)
    {
		$token = $request->bearerToken();

		$user = User::whereToken($token)->first();

		$visitGroups = GroupUser::where('user_id', '=', $user->id)->get();

		$groups_id = [];
		foreach ($visitGroups as $visitGroup) {
			$groups_id[] = $visitGroup->group_id;
		}

		$events = Event::whereIn('group_id', $groups_id, 'or')->orderBy('time_end')->get()->toArray();

		$group_name = Group::whereIn('id', $groups_id, 'or')->get(['id','name']);

		$data = [];

		foreach ($events as $event) {
			$event['group_name'] = $group_name->where('id', '=', $event['group_id'])->first()->name;
			$data[] = $event;
		}

		return response()->json($data);
    }

    public function store(Request $request)
    {
		$data['name'] = $request->get('name');
		$data['description'] = $request->get('description');
		$data['time_end'] = $request->get('time_end');
		$data['group_id'] = $request->get('group_id');

		Event::create(["name" => $data['name'], "description" => $data['description'], "time_end" => $data['time_end'], "group_id" => $data['group_id']]);
		$event = Event::get('id')->last();

		return response()->json($event::get()->last());
    }
}
