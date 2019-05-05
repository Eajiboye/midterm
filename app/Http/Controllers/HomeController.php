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

        $users = User::all();

        $users = User::where ('id', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();
        dd($users ->count());

        return view('profile', ['test' => 'test']);
    }
}

