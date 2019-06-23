<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$guard = config('auth.defaults.guard');
		if($guard == 'ptnr' && !empty(auth()->user()))
		{
			return redirect()->intended('/employer');
		}
		else if($guard == 'employee' && !empty(auth()->user()))
		{
			return redirect()->intended('/employee');
		}
		else if($guard == 'web' && !empty(auth()->user()))
		{
			return redirect()->intended('/attorney');
		}
        return view('auth.login');
    }
	
}
