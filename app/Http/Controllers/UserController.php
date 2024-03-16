<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname' =>'required',
            'loginpassword' => 'required'
        ]);

        if(auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])){

            $request->session()->regenerate();

            return redirect('dashboard');

        }

        return redirect('/');

    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', Rule::unique('users', 'email')],
            'name' => ['required', Rule::unique('users', 'name')],
            'password' => 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('dashboard');
    }
}
