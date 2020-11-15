<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function show()
    {   
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data=$request->only('email','password');
        if(Auth::attempt($data)){
            return redirect()->route('crud.index');
        }
        return redirect()->route('login');
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('crud.index',);
        }
    }
}
