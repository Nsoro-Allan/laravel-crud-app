<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'email' =>'required',
            'username' =>'required',
            'password' =>'required',
        ]);
        return "<h1>Thanks For Submiting this form...</h1>";
    }
}
