<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'name' => 'required',
            'password' => 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('dashboard');
    }
}
