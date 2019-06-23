<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	 
	public function __construct()
    {
        $this->middleware('auth');
    } 
	 
    public function dashboard()
    {
		return view('employer/dashboard');
    }
}
