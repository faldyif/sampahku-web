<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Story;
use Illuminate\Support\Facades\Auth;

class ApiStoryController extends Controller
{
    /**
     * Store story at server.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image',
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

        $story = new Story();
        $story->latitude = $request->latitude;
        $story->longitude = $request->longitude;
        $story->accuracy = $request->accuracy;
        $story->user_id = $request->user_id;
        $story->verified = 0;
        if($request->hasFile('photo') && $request->file('photo')->isValid()) {
           $destinationPath = 'public/story';
           $extension = $request->photo->extension();
           $fileName = date('YmdHms').'_'.$request->user_id.'.'.$extension;
           $request->photo->storeAs($destinationPath, $fileName);
           $story->photo_path = $fileName;
        }
        $story->save();

        $response = array();
		$response['error'] = false;
		
		return json_encode($response);
    }
}
