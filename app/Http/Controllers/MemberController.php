<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Route;
use DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $members = User::all();
        return view('members.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /* $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'mobile_number' => 'required'
        ]);*/

        User::create([
            'name'=> $request->Input('name'),
            'email'=> $request->Input('email'),
            'password'=> $request->Input('password'),
            'address'=> $request->Input('address'),
            'mobile'=> $request->Input('mobile'),
            'is_admin'=> $request->Input('is_admin')]);
        return redirect()->back();

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
  
  public function update($id)
    {
        $members = User:: find($id);
        return view('memberedit', compact('member', 'id'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = User:: find($id);
        return view('members.medit')->with('members',$members);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $members = User::find($id);
        $members->delete();
        return redirect()->back()->with('success', true);
    }



}


