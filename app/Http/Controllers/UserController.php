<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function all(){
        // return view('user.list', ['user'=> User::list()])
    }

    public function show($id){
        //return view('user' , ['user'=> User::findOrFail($id)]);
    }
}
