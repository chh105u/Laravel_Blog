<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data=$request->only('name','email','password');
        $data['password']=bcrypt($data['password']);
        // $data['email_verified_at']=now();
        // $data['remember_token']=Str::random(10);
        \App\Models\User::create($data);
        return redirect()->route('crud.index');
    }
}
