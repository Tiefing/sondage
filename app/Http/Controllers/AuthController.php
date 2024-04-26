<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Controllers\Hash;

class AuthController extends Controller
{

    public function login()
    {   /* 
        User::create(
        [
            'name'=>'tiefing',
            'email'=>'tiefingsang22@gmail.com',
            'password'=>'12345', 
        ]); */
        
        
        return view('login');
    }


    public function dologin( LoginRequest $request)
    {
        $credentials=$request->validated();
        if(Auth::attempt($credentials)){
            // $request->session()->generate();
            return redirect()->intended(route('index'));

        }
        return back()->withErrors([
            'email'=>'Identifiant incorrect'
        ])->onlyinput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('succès vous êtes deconncté');
    }


   /*  public function publique()
    {
        return view('login');
    } */
}
