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

        $car = Car::find();
        $cars = Car::all();
        $car ->year = '2000';
        $car ->save();
      
        dd($cars);


        return view('profile', ['cars' => $cars]);
    }
}

