<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public $timestamps = false;
	public $incrementing = false;

	protected $fillable = [
		'name',
		'description',
		'time_end',
		'group_id'
	];

	protected $casts = [
		'time_end' => 'datetime'
	];
}
