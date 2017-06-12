<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Trash;
use App\TrashType;
use Illuminate\Support\Facades\Auth;

class ApiTrashController extends Controller
{
    /**
     * Get all the trash data.
     *
     * @param  Request  $request
     * @return Response
     */
    public function get(Request $request)
    {
        $response = array();
		$response['trash'] = Trash::all();
		$response['error'] = false; 

		foreach ($response['trash'] as $key) {
			$key['trash_type'] = TrashType::find($key->trash_type_id);
		}
		
		return json_encode($response);
    }

    /**
     * Get all the trash type.
     *
     * @param  Request  $request
     * @return Response
     */
    public function getTrashTypes(Request $request)
    {
        $response = array();
		$response['trash'] = TrashType::all();
		$response['error'] = false; 
		
		return json_encode($response);
    }

    /**
     * Get all the trash data.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'photo' => 'required|image',
            'trash_type_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'accuracy' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            $response['error'] = true;
            $response['error_msg'] = "Semua data harus terisi!";
            return json_encode($response);
        }

        $trash = new Trash();
        $trash->description = $request->description;
        $trash->trash_type_id = $request->trash_type_id;
        $trash->latitude = $request->latitude;
        $trash->longitude = $request->longitude;
        $trash->accuracy = $request->accuracy;
        $trash->user_id = $request->user_id;
        $trash->description = $request->description;
        $trash->verified = 0;
        if($request->hasFile('photo') && $request->file('photo')->isValid()) {
           $destinationPath = 'public/trash/new';
           $extension = $request->photo->extension();
           $fileName = date('YmdHms').'_'.$request->user_id.'.'.$extension;
           $request->photo->storeAs($destinationPath, $fileName);
           $trash->photo_path = $fileName;
        }
        $trash->save();

        $response = array();
		$response['error'] = false;
		
		return json_encode($response);
    }
}
