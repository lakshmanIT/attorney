<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ptnr extends Authenticatable
{
    use Notifiable;

	protected $guard = 'ptnr';

	protected $fillable = [
		'first_name', 'last_name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
	
	protected $table = 'ptnr';
}
