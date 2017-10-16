<?php

namespace Stir;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'password', 'firstname', 'lastname', 'email', 'address', 'postcode', 'phone', 'type'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
		'remember_token',
	];

	// when first name was filled during registration
	// we capture it and update first and last name accordingly
	public function setNameAttribute($value)
	{
		$text = explode(" ", $value);
		$this->attributes['name'] = $value;
		$this->attributes['firstname'] = $text[0];
		$this->attributes['lastname'] = end($text);
	}

	// just make username a copy of email
	public function setEmailAttribute($value)
	{
		$this->attributes['email'] = $value;
		$this->attributes['username'] = $value;
	}
}
