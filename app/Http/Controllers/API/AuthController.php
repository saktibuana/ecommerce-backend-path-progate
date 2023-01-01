<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(LoginUserRequest $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return $this->error('','Credentials do not match', 401);
        }
        
        $user = User::where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of '.$user->fullname)->plainTextToken
        ]);
    }

    public function register(StoreUserRequest $request){
        $request->validated($request->all());
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of '. $user->fullname)->plainTextToken
        ]);
    }

    public function logout(){
    
        return response()->json("THis is me logging out");
    }
}