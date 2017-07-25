<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrashType;
use Session;
use Illuminate\Support\Facades\Auth;

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
        return view('admin.trashType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Buat objek TypeTrash baru
        $this->validate($request,[
              'trash_type' => 'required',
              'icon' => 'required|image'
        ]);

        // Buat objek TypeTrash baru
        $trashType = new TrashType;
        // Isi objek TypeTrash
        $trashType->trash_type = $request->trash_type;
        if($request->hasFile('icon') && $request->file('icon')->isValid()) {
            $destinationPath = 'public/trash_type_icon';
            $extension = $request->icon->extension();
            $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
            $request->icon->storeAs($destinationPath, $fileName);
            $trashType->icon_path = $fileName;
        }

        // Simpan object TypeTrash ke dalam database
        $trashType->save();

        // Beri message kalau berhasil
        Session::flash('message', 'Berhasil menambahkan type tempat sampah!');
        return redirect('admin/trashType'); // Set redirect ketika berhasil


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
        return View('admin.trashType.edit')->with('trashType', $trashType);
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


        return redirect('admin/trashType');
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
        // $trashType = TrashType::find($id);
        // $trashType->delete();

        TrashType::destroy($id);
        //redirect
        Session::flash('message','Data berhasil dihapus');
        return redirect('admin/trashType');

      //   User::destroy($id);
      //  // Beri message kalau berhasil
      //  Session::flash('message', 'Berhasil menghapus user!');
      //  return redirect('admin/user'); // Set redirect ketika berhasil


    }
}
