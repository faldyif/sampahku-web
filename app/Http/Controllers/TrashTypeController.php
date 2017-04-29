<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $trashType = TrashType::all();
        return View('admin.trashType.index')->with('trashType', $trashType);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trashType.create');
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

        // -----
        // Buat objek TypeTrash baru
        $this->validate($request,[
              'trash_type' => 'required',
              'icon_path' => 'required',

          ]);

          // Buat objek TypeTrash baru
          $trashType = new TrashType;
          // Isi objek TypeTrash
          $trashType->trash_type=$request->trash_type;
          $trashType->icon_path = $request->icon_path;

          // Simpan object TypeTrash ke dalam database
          $trashType->save();

          // Beri message kalau berhasil
          Session::flash('message', 'Berhasil menambahkan type tempat sampah!');
          return redirect('trashType/index'); // Set redirect ketika berhasil


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
        $trashType = TrashType::find($id);
        return View('trashType.edit')->with('trashType', $trashType);
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
          'trash_type' => 'required',
          'icon_path' => 'required',
        ]);

        // Buat objek TopUp baru
        $trashType = TrashType::find($id);
        // Isi objek topup
        $trashType->trash_type=$request->trash_type;
        $trashType->icon_path = $request->icon_path;

        // Simpan object schedule ke dalam database
        $trashType->save();


        return redirect('trashType');
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
        $trashType = TrashType::find($id);
        $trashType->delete();
        //redirect
        Session::flash('message','Data berhasil dihapus');
        return Redirect::to('trashType');
    }
}
