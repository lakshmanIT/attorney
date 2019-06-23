<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

	protected $guard = 'employee';
	
	protected $table = 'ptnr_emp';
	
	protected $fillable = [
		'first_name', 'last_name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}
