<?php

namespace App\Http\Controllers\Attorney;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttorneyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
		return view('attorney/dashboard');
    }
}
