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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()

    {
     //$user = $user = Auth::user();

        $user = User::find(3);
        $user ->name = 'Steve Smith';
        $user ->save ();
        dd($user);


        return view('profile', ['test' => 'test']);
    }
}

