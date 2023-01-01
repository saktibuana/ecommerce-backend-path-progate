<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //mengatur validasi
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'    

        ]);

        //ketika validasi gagal
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only('email','password');

        if(!$token = auth ()->guard('api')->attempt($credentials)){
            return response()->json([
                'success' => false,
                'message' => 'Email atau Password Anda salah'
            ], 401);
        }

        //ketika auth success
        return response()->json([
            'success' => true,
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ], 200);
    }
}
