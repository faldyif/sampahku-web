<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    /**
     * Check user login.
     *
     * @param  Request  $request
     * @return Response
     */
    public function login(Request $request)
    {
        $response = array();

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            $response['error'] = true;
            $response['error_msg'] = "Kedua data harus terisi!";
            return json_encode($response);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $response['user'] = User::where('email', $request->email)->first();
            $response['error'] = false; 
            return json_encode($response);
        } else {
            $response['error'] = true;
            $response['error_msg'] = "Email atau password salah!";
            return json_encode($response);
        }
    }

    /**
     * Register user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function register(Request $request)
    {
        $response = array();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            $response['error'] = true;
            $response['error_msg'] = "Semua data harus terisi!";
            return json_encode($response);
        }

        if (User::where('email', $request->email)->count() == 0) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $response['user'] = $user;
            $response['error'] = false; 
            return json_encode($response);
        } else {
            $response['error'] = true;
            $response['error_msg'] = "Email sudah digunakan!";
            return json_encode($response);
        }
    }
}
