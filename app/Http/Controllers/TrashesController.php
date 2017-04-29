<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ambil semua data trash
        $trashes = Trash::all()
        return View('trashes.index')->with('trashes',$trashes);
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
        //validasi

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
        $trashes = Trash::where('id',$id)->get();
        return View('trashes.view')->with('trashes',$trashes);
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
        $trashes = Trash::find($id);
        return View('trashes.edit')->with('trashes',$trashes);
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
        $trashes = Trash::find($id);
        $trashes->description = $request->description;
        $trashes->photo_path = $request->photo_path;
        $trashes->user_id = Auth::user()->id;
        $trashes->trash_type_id = Auth::trash_type()->id;
        $trashes->verified = $request->verified;
        $trashes->latitude = $request->latitude;
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
