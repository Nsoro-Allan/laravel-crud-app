<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'username' => ['required', 'min:3'],
            'password' =>['required','min:8','max:100'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);

        return "<h1>Thanks For Submiting this form...</h1>";
    }
}
