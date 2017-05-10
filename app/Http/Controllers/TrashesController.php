<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Trash;
use App\User;
use Session;

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
        $trash = Trash::all();
        return View('admin.trash.index')->with('trash',$trash);
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
        // $trash = Trash::where('id',$id)->get();
        // return View('admin.trash.view')->with('trash',$trash);
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
        $trash= Trash::find($id);
        return View('admin.trash.edit')->with('trash',$trash);
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
        $trash= Trash::find($id);
        $trash->description = $request->description;
        $trash->photo_path = $request->photo_path;
        //$trash->user_id = Auth::user()->id;
        //$trash->trash_type_id = trash_type()->id;
        $trash->verified = $request->verified;
        $trash->latitude = $request->latitude;
        $trash->longitude = $request->longitude;
        $trash->accuracy = $request->accuracy;

        $trash->save();
        Session::flash('message', 'Berhasil mengedit Tempat Sampah!');
        return redirect('admin/trash'); // Set redirect ketika berhasil
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
        return redirect('admin/trash'); // Set redirect ketika berhasil

    }
}
