<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public $timestamps = false;
	public $incrementing = false;

	protected $fillable = [
		'name',
		'limit_money'
	];
}
