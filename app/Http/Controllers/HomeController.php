<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessagePosted;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        event(new MessagePosted([1,2,3,4]));
        return view('home');
    }
}
