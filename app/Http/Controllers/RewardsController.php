<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RewardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reward = Reward::all();
        return View('reward.index')->with('reward', $reward);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reward.create');
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
        $this->validate($request,[
             'name' => 'required',
             'description' => 'required',
             'title' => 'required',
             'stock' => 'required',
             'photo_path' => 'required',
             'available' => 'required',

         ]);

         // Buat objek TypeTrash baru
         $reward = new Reward;
         // Isi objek TypeTrash
         $reward->name=$request->name;
         $reward->description = $request->description;
         $reward->title = $request->title;
         $reward->stock = $request->stock;
         $reward->photo_path = $request->photo_path;
         $reward->available = $request->available;

         // Simpan object TypeTrash ke dalam database
         $trashType->save();

         // Beri message kalau berhasil
         Session::flash('message', 'Selama berhasil mendapatkan reward!');
         return redirect('reward/index'); // Set redirect ketika berhasil
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
        $reward = Reward::find($id);
       return View('reward.edit')->with('reward', $reward);
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
        $this->validate($request,[
          'name' => 'required',
          'description' => 'required',
          'title' => 'required',
          'stock' => 'required',
          'photo_path' => 'required',
          'available' => 'required',

        ]);

        // Buat objek Reward baru
        $reward = Reward::find($id);
        // Isi objek reward
        $reward->name=$request->name;
        $reward->description = $request->description;
        $reward->title = $request->title;
        $reward->stock = $request->stock;
        $reward->photo_path = $request->photo_path;
        $reward->available = $request->available;

        // Simpan object schedule ke dalam database
        $trashType->save();


        return redirect('reward');
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
        $reward = Reward::find($id);
        $reward->delete();
        //redirect
        Session::flash('message','Data berhasil dihapus');
        return Redirect::to('reward');
    }
}
