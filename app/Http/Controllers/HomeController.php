<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Reservation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user();
        if(Auth::user()){
        $reserv = Reservation::join('users','reservations.user_id','=','users.id')
        ->select('reservations.*')
        ->where('reservations.user_id','=', Auth::id())
        ->first();


        return view('home',compact('users','reserv'));
    }

        return view('home',compact('users'));
        
    }
}
