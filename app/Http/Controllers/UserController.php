<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        return View('admin.user.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
       return View('user.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->email = $request->description;
        $user->password = $request->photo_path;
        $user->us = Auth::user()->id;
        $user->trash_type_id = Auth::trash_type()->id;
        $user->verified = $request->verified;
        $user->latitude = $request->latitude;
        $trashes->longitude = $request->longitude;
        $trashes->accuracy = $request->accuracy;

        $trashes->save();
        Session::flash('message', 'Berhasil mengedit Tempat Sampah!');
        return redirect('trashes/index'); // Set redirect ketika berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Trash::destroy($id);
       // Beri message kalau berhasil
       Session::flash('message', 'Berhasil menghapus tempat sampah!');
       return redirect('trashes/index'); // Set redirect ketika berhasil
    }
}
