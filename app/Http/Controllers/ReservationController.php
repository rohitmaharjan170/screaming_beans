<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reservation;
use \App\User;
use \App\Tbl;
use App\Route;
class ReservationController extends Controller
{
    public function index()
    {
        $res = Tbl::all();
        return view('reserv',compact('res'));

    }


     public function show($id)
    {
        //
    }


    
}
