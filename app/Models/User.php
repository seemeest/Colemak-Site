<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public $timestamps = false;
	public $incrementing = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'surname',
		'email',
		'password',
		'token'
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [

	];

}

