<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
	public $table = 'group_user';

	public $primaryKey = 'id';

	public $timestamps = false;

	public $incrementing = false;

	protected $fillable = [
		'user_id',
		'group_id',
		'to_user_id',
		'wish',
		'is_owner'
	];
}
