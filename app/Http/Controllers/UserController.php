<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'username' => ['required', 'min:3'],
            'password' =>['required','min:8','max:100'],
        ]);
        return "<h1>Thanks For Submiting this form...</h1>";
    }
}
